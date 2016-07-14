<?php

namespace App\Application\Api\Admin\Controllers\user;

use App\Application\Api\Admin\Controllers\Controller;
use Auth, App, Response,Redirect, Request, Registeration

class UserController extends Controller
{
    public function loginPost():array
    {
       // . . .
    }

    public function logoutGet():bool
    {
       // . . .
    }

    public function valueObjectsSetter():array
    {
        //... 
        $input['userUpdateBy']     = Auth::user();
        $input['userMobileNumber'] = new Phone($input['userMobileNumber']);
        $input['userEmail']        = new Email($input['userEmail']);
        $input['userCreated']      = new DateTime();
        return $input;
    }

    public function Register():array 
    {
        $user = Registeration::register($this->valueObjectsSetter(Request::all()));

        return [
            'status' => true,
            'message_fr' => 'c\'est bien',
            'result' => [
                'id' => $user->getId()
            ],
            'go_to' => ''
        ];
    }
}
