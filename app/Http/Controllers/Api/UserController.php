<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function get_users()
    {
        $users = User::with('points')->get();

        return UserResource::collection($users);
    }

    public function get_user($id)
    {
        $user = User::findOrFail($id);

        return new UserResource($user);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
        ]);

        $user = User::create($validatedData);

        return new UserResource($user);
    }
}
