<?php

namespace App\Services;

use App\Repository\Contracts\RegisterRepositoryInterface;
use App\Services\Contracts\RegistrationServiceInterface;
use Illuminate\Http\Request;

class RegistrationServiceImp implements RegistrationServiceInterface
{
    protected $registerRepositoryInterface;

    public function __construct(RegisterRepositoryInterface $registerRepositoryInterface){
        $this->registerRepositoryInterface = $registerRepositoryInterface;
    }
    public function getAllUsers()
    {
        // TODO: Implement getAllUsers() method.
        return $this->registerRepositoryInterface->getRegisteredUsers();
    }

    public function getUsers($id)
    {
        // TODO: Implement getUsers() method.
        return $this->registerRepositoryInterface->getRegisteredUserById($id);
    }

    public function createUser(Request $user)
    {
        // TODO: Implement createUser() method.
        return $this->registerRepositoryInterface->createUser($user);
    }

    public function updateUser($id, Request $user)
    {
        // TODO: Implement updateUser() method.
        return $this->registerRepositoryInterface->updateUser($id, $user);
    }

    public function deleteUser($id)
    {
        // TODO: Implement deleteUser() method.
        return $this->registerRepositoryInterface->deleteUser($id);
    }

    public function editUserForm($id)
    {
        // TODO: Implement editUserForm() method.
        return $this->registerRepositoryInterface->getUserDataForEdit($id);
    }
}
