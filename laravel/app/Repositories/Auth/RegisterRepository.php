<?php

namespace App\Repositories\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterRepository implements RegisterRepositoryInterface
{
    /**
     * Create a new user instance.
     *
     * @param RegisterRequest $request
     * @return void
     */
    public function createUser(RegisterRequest $request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }
}
