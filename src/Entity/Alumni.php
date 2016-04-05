<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class Alumni
{
    public $email;

    public $firstName;

    public $lastName;

    public $randomNumber;

    public function __construct($email, $firstname, $lastname, $randomNumber = null)
    {
        $this->email = $email;
        $this->firstName = ucwords(strtolower($firstname));
        $this->lastName  = strtoupper($lastname);

        if (is_null($randomNumber)) {
            $value = [$email, $firstname, $lastname];
            $this->randomNumber = substr(mt_rand(100, 999) . md5($value[mt_rand(0, 2)]), 0, 8);

        } else {
            $this->randomNumber = $randomNumber;
        }

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getRandomNumber()
    {
        return $this->randomNumber;
    }
}