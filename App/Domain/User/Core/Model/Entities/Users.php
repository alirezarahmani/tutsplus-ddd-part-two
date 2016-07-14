<?php

namespace App\Domain\User\Core\Model\Entities;

use App\Domain\User\Core\Model\ValueObjects\Email;
use App\Domain\User\Core\Model\ValueObjects\Hashify;
use Doctrine\ORM\Mapping as ORM;
use App\Domain\User\Core\Model\ValueObjects\Phone as PhoneNumber;
use DateTime;


/**
 * Users
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users 
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_full_name", type="string", length=150, nullable=false)
     */
    private $userFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_mobile_number", type="string", length=11, nullable=true)
     */
    private $userMobileNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255, nullable=false)
     */
    private $userEmail;


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_status", type="boolean", nullable=true)
     */
    private $userStatus = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_created", type="datetime", nullable=false)
     */
    private $userCreated;

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Set userFullName
     *
     * @param string $userFullName
     *
     * @return Users
     */
    public function setUserFullName($userFullName)
    {
        $this->userFullName = $userFullName;

        return $this;
    }

    /**
     * Get userFullName
     *
     * @return string
     */
    public function getUserFullName():string
    {
        return $this->userFullName;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword(Hashify $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword():string
    {
        return $this->password;
    }

    /**
     * Set userMobileNumber
     *
     * @param string $userMobileNumber
     *
     * @return Users
     */
    public function setUserMobileNumber(PhoneNumber $userMobileNumber)
    {
        $this->userMobileNumber = $userMobileNumber;
        return $this;
    }

    /**
     * Get userMobileNumber
     *
     * @return string
     */
    public function getUserMobileNumber():string
    {
        return (String) $this->userMobileNumber;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return Users
     */
    public function setUserEmail(Email $userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail():string
    {
        return $this->userEmail;
    }

    /**
     * Set userStatus
     *
     * @param boolean $userStatus
     *
     * @return Users
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return boolean
     */
    public function getUserStatus():string
    {
        return $this->userStatus;
    }

    /**
     * Set userCreated
     *
     * @param \DateTime $userCreated
     *
     * @return Users
     */
    public function setUserCreated(DateTime $userCreated)
    {
        $this->userCreated = $userCreated;

        return $this;
    }

    /**
     * Get userCreated
     *
     * @return \DateTime
     */
    public function getUserCreated()
    {
        return $this->userCreated;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
