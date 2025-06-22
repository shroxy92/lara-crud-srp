<?php

namespace App\Services;

use App\Repository\Contracts\RegisterRepositoryInterface;
use App\Services\Contracts\RegistrationServiceInterface;

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

    public function createUser(array $user)
    {
        // TODO: Implement createUser() method.
        return $this->registerRepositoryInterface->createUser($user);
    }

    public function updateUser($id, array $user)
    {
        // TODO: Implement updateUser() method.
        return $this->registerRepositoryInterface->updateUser($id, $user);
    }

    public function deleteUser($id)
    {
        // TODO: Implement deleteUser() method.
        return $this->registerRepositoryInterface->deleteUser($id);
    }
}
