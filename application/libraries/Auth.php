<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth 
{
    public function IsAdmin($username, $password)
    {
        echo $username.$password;
    }
}