<?php

namespace App\Repository\Contracts;

interface RegisterRepositoryInterface
{
    public function getRegisteredUsers();
    public function getRegisteredUserById(string $id);
    public function getRegisteredUserByEmail(string $email);
    public function getRegisteredUserByUsername(string $username);
    public function createUser(array $user);
    public function updateUser($id, array $user);
    public function deleteUser($id);

}
