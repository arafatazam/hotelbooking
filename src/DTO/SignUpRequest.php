<?php

namespace App\DTO;

use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/** @JMS\AccessType("public_method") */
class SignUpRequest extends BaseDTO{
    /** 
     * @JMS\SerializedName("first_name")
     * @JMS\Type("string")
     * @Assert\NotBlank
     */
    private $firstName;
    
    /** 
     * @JMS\SerializedName("last_name")
     * @JMS\Type("string")
     * @Assert\NotBlank
     */
    private $lastName;
    
    /** 
     * @JMS\Type("string")
     * @Assert\NotBlank
     */
    private $email;
    
    /** 
     * @JMS\Type("string")
     * @Assert\NotBlank
     */
    private $password;

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}