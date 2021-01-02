<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Followable;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    //follow the given user

    public function store(User $user)
    {

        auth()->user()->toggleFollow($user);
            return back();
    }
}
