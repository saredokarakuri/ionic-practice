<?php

namespace App\Repositories\Auth;

use App\Http\Requests\Auth\RegisterRequest;

interface RegisterRepositoryInterface
{
    /**
     * Create a new user instance.
     *
     * @param RegisterRequest $request
     * @return void
     */
    public function createUser(RegisterRequest $request);
}
