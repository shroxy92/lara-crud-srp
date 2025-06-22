<?php

namespace App\Repository;

use App\Models\RegisterUser;
use App\Repository\Contracts\RegisterRepositoryInterface;

class RegisterRepositoryImp implements RegisterRepositoryInterface
{
    /**
     * @var RegisterUser
     */
    protected RegisterUser $registerModel;

    public function __construct(RegisterUser $registerModel)
    {
        $this->registerModel = $registerModel;
    }

    public function getRegisteredUsers()
    {
        // TODO: Implement getRegisteredUsers() method.
        return $this->registerModel->all();
    }

    public function getRegisteredUserById(string $id)
    {
        // TODO: Implement getRegisteredUserById() method.
        return $this->registerModel->findOrFail($id);
    }

    public function getRegisteredUserByEmail(string $email)
    {
        // TODO: Implement getRegisteredUserByEmail() method.
        return $this->registerModel->findOrFail($email);
    }

    public function getRegisteredUserByUsername(string $username)
    {
        // TODO: Implement getRegisteredUserByUsername() method.
        return $this->registerModel->findOrFail($username);
    }

    public function createUser(Request|array $user)
    {
        // TODO: Implement createUser() method.
        return $this->registerModel::create($user->all());

    }

    public function updateUser($id, Request|array $user)
    {
        // TODO: Implement updateUser() method.
        $updateUser = $this->registerModel::findOrFail($id);
        if($user->filled('name')) {
            $updateUser->name = $user->input('name');
        }
        if($user->filled('email')) {
            $updateUser->email = $user->input('email');
        }
        $updateUser->save();

        return $updateUser;


    }

    public function deleteUser($id)
    {
        // TODO: Implement deleteUser() method.
    }
}
