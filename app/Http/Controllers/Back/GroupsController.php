<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function show()
    {
        $groups = Group::all();
        return view('Back.guest_groups',['groups' => $groups]);
    }
}
