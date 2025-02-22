<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationsController extends Controller
{
    public function show()
    {
        $invitation = Invitation::orderBy('id', 'DESC')->first();
        return view('Back.invitations',['invitation' => $invitation]);
    }
}
