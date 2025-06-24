<?php

namespace App\Services\Contracts;

use Illuminate\Http\Request;

interface RegistrationServiceInterface
{
    public function getAllUsers();
    public function getUsers($id);
    public function createUser(Request $user);
    public function updateUser($id, Request $user);
    public function editUserForm($id);
    public function deleteUser($id);
}
