<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * get all users
     * @return json users data
     */
    public function get_users()
    {
        $users = User::with('points')->get();

        return UserResource::collection($users);
    }

    /**
     * get a user
     * @param int $id
     * @return json user data
     */
    public function get_user($id)
    {
        $user = User::findOrFail($id);

        return new UserResource($user);
    }

    /**
     * register user
     * @param Request $request input data
     * @return json user registed data
     */
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
