<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\Auth\RegisterRepositoryInterface;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param RegisterRepositoryInterface $login_repository_interface
     * @return void
     */
    private $Register_repository;
    public function __construct(RegisterRepositoryInterface $Register_repository_interface)
    {
        $this->Register_repository = $Register_repository_interface;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param RegisterRequest $request
     * @return void
     */
    public function create(RegisterRequest $request)
    {
        $this->Register_repository->createUser($request);
    }
}
