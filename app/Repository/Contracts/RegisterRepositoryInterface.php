<?php

namespace App\Repository\Contracts;

use Illuminate\Http\Request;

interface RegisterRepositoryInterface
{
    public function getRegisteredUsers();
    public function getRegisteredUserById(string $id);
    public function getRegisteredUserByEmail(string $email);
    public function getRegisteredUserByUsername(string $username);
    public function createUser(Request $user);
    public function updateUser($id, Request $user);
    public function getUserDataForEdit($id);
    public function deleteUser($id);

}
