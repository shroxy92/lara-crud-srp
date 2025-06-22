<?php

namespace App\Services\Contracts;

interface RegistrationServiceInterface
{
    public function getAllUsers();
    public function getUsers($id);
    public function createUser(array $user);
    public function updateUser($id, array $user);
    public function deleteUser($id);
}
