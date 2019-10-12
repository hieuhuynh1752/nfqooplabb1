<?php
namespace NFQ\Controllers;

use NFQ\Models\User;

class UserController extends BaseController
{
    public function CreateUser($name,$email,$gender)
    {
        // TODO: Implement CreateUser() method.
        $user = User::Create($name,$email,$gender);
        $result = $user->getUserInfo();
        return $result;
    }

    public function DisplayUser($UserId)
    {
        // TODO: Implement DisplayUser() method.
    }
}