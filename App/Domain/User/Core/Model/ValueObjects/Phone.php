<?php

namespace App\Domain\User\Core\Model\ValueObjects;

use Assert\Assertion;

class Phone
{
    public $phone;
    public function __construct(string $phone)
    {
        Assertion::regex($phone,'/^09[0-3][0-9]{8}$/');
        $this->phone=$phone;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string) $this->phone;
    }
}
