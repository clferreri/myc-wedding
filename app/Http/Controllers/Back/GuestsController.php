<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;

class GuestsController extends Controller
{
    public function show()
    {
        $guests = Guest::all();
        return view('Back.guests',['guests' => $guests]);
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');

        $data = Excel::toArray([], $file);

        try{
            DB::beginTransaction();
            foreach ($data[0] as $index => $row) {
                if ($index === 0) {
                    continue;
                }

                $quantity_invitations = 1;
                if(isset($row[4]) && !empty($row[4])){
                    $quantity_invitations = $row[4];
                }

                Guest::create([
                    'name' => $row[0],
                    'surname' => $row[1],
                    'email' => $row[2],
                    'phone' => $row[3],
                    'quantity_of_invitations' => $quantity_invitations
                ]);
            }
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json(['success' => 'Archivo procesado y datos almacenados']);
    }
}
