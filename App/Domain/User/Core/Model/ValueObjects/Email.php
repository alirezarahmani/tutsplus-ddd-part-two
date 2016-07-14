<?php

namespace App\Domain\User\Core\Model\ValueObjects;
use Assert\Assertion;

class Email
{
    public $email;
    public function __construct($email)
    {
        Assertion::email($email);
        $this->email=$email;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string) $this->email;
    }
}
