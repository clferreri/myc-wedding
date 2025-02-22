<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Communication;
use App\Models\CommunicationSend;
use App\Models\Group;
use App\Models\Guest;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;

class CommunicationController extends Controller
{
    public function show()
    {
        $communications = Communication::all();
        $guestCount = Guest::count();
        foreach ($communications as $key => $communication) {
            if($communication->group_id){
                $communication->total_to_send = Guest::where('group_id', $communication->group_id)->count();
            }else{
                $communication->total_to_send = $guestCount;
            }
        }

        $groups = Group::all();
        return view('Back.communications',['communications' => $communications, 'groups' => $groups]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:25',
            'message' => 'required|string|max:250',
            'imageUrl' => 'max:200',
            'groupId' => 'required|integer',
        ]);

        try{
            if ($validator->fails()) {
                return response()->json([
                    'code' => 1,
                    'message' => 'Alguno de los datos no fue enviado correctamente.'
                ], 400);
            }

            Communication::create([
                'title' => $request->title,
                'message' => $request->message,
                'imageUrl' => $request->imageUrl,
                'groupId' => $request->groupId,
            ]);

            return response()->json(['code' => 0], 201);
        }catch(Exception $e){
            return response()->json(['code' => 999, 'message' => $e->getMessage()], 500);
        }
    }

    public function send(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $communicationId = $request->input('id');

        try{
            set_time_limit(0);
            $communication = Communication::find($communicationId);

            if(!$communication){
                return response()->json(['code' => 1, 'message' => 'La comunicacion no existe']);
            }

            $guests = ($communication->group_id) ? Guest::where('group_id', $communication->group_id)->get() : Guest::all();

            $communication->send_at = Carbon::now();
            $communication->save();

            $client = new Client();

            $guestsAlredyReceived = $communication->communicationsSent->pluck('guest_id')->toArray();

            $cantidad = 0;

            foreach ($guests as $key => $guest) {
                if(in_array($guest->id, $guestsAlredyReceived)){
                    continue;
                }

                if(strlen($guest->phone) < 9){
                    continue;
                }

                $message = $communication->message;

                $message = json_decode(json_encode($message,JSON_UNESCAPED_SLASHES));
                $message = str_replace("{{name}}", $guest->name, $message);
                $url = "send-message";
                $request = ['json' => ['number' => $guest->phone, 'message' => $message]];
                if($communication->image_url){
                    $url = "send-file";
                    $type = "local";
                    if(str_starts_with($communication->img_url,'http')){
                        $type = "url";
                    }
                    $request = ['json' => ['number' => $guest->phone, 'file' => $communication->image_url, 'type' => $type, 'message' => $message]];
                }

                $response = $client->request('POST', env('WPP_API_BASE_URL') . $url, $request);

                if ($response->getStatusCode() >= 400) {
                    //continue;
                    throw new \Exception("Error en la solicitud: {$response->getStatusCode()}");
                }

                CommunicationSend::create([
                    'communication_id'  => $communication->id,
                    'guest_id'          =>   $guest->id,
                    'created_at'        => Carbon::now()
                ]);
                $cantidad ++;
                $waitTime = rand(2, 4);
                sleep($waitTime);
            }

            return response()->json(['code' => 0], 201);
        }catch(Exception $e){
            return response()->json(['code' => 999, 'message' => $e->getMessage()], 500);
        }
    }

    public function delete(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $communicationId = $request->input('id');

        try{
            set_time_limit(0);
            $communication = Communication::find($communicationId);

            if(!$communication){
                return response()->json(['code' => 1, 'message' => 'La comunicacion no existe']);
            }

            $communication->deleted_at = Carbon::now();
            $communication->save();

            return response()->json(['code' => 0], 201);
        }catch(Exception $e){
            return response()->json(['code' => 999, 'message' => $e->getMessage()], 500);
        }
    }
}
