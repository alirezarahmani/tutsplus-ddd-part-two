<?php

namespace App\Domain\Identity\Services;
use App;

class RegisterService
{
    private $error = false;

    public function register(array $input)
    {
            //Call specification pattern
            // Repository  goes here 
            $input['password']=  new App\Domain\User\Core\Model\ValueObjects\Hashify($input['password']);
            $user             =  $userRepo->Persist($input);
            //  call sms
            //  call email service
        return $user;
    }
}
