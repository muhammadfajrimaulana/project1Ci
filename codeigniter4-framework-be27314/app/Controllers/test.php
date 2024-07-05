<?php

namespace App\Controllers;
use App\Models\UserModel;

class Test extends BaseController
{
    public function index()
    {
        $user = New UserModel();

        $result = $user->findAll();

        foreach($result as $key) {
            echo $key['Username'] . '<br>';
        }
        
    }
}