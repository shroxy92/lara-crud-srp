<?php

namespace App\Http\Controllers;

use App\Services\Contracts\RegistrationServiceInterface;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $registerService;
    public function __construct(RegistrationServiceInterface $registerService)
    {
        $this->registerService = $registerService;
    }

    public function createUser()
    {
        //return $this->registerService->createUser();
        return view('create');
    }
    public function updateUser($id){
        return $this->registerService->updateUser($id);
    }
    public function allUsers(){
        $requsers =  $this->registerService->getAllUsers();
        return view('index',compact('requsers'));
    }
    public function deleteuser($id)
    {
        return $this->registerService->deleteUser($id);
    }


}
