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
    public function editUserForm($id)
    {
        $user = $this->registerService->editUserForm($id);
        return view('edit', compact('user'));
    }
    public function updateUser(Request $request, $id){
        $flag = $this->registerService->updateUser($id, $request);
        return redirect()->route('home')->with('success', 'User updated successfully');
    }
    public function allUsers(){
        $requsers =  $this->registerService->getAllUsers();
        return view('index',compact('requsers'));
    }
    public function deleteuser($id)
    {
        $res =  $this->registerService->deleteUser($id);
        return redirect()->route('home')->with('success', 'User deleted successfully');
    }

    public function showUser($id)
    {
            $userId = $this->registerService->getUsers($id);
            return view('show',compact('userId'));
    }

}
