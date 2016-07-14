<?php
namespace App\Domain\User\Core\Model\ValueObjects;

class Hashify
{
    private $input;

    public function __construct($input)
    {
        $this->input= Bcrypt($input);
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->input;
    }
}
