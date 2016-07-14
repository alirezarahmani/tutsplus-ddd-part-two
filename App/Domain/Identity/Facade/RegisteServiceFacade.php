<?php


namespace App\Domain\Identity\Services\Facade;

use Illuminate\Support\Facades\Facade;

class RegisteServiceFacade extends Facade{
    protected static function getFacadeAccessor() { return 'RegisterService'; }
}
