<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class Alumni
{
    private $email;

    private $firstName;

    private $lastName;

    private $randomNumber;

    private $url;

    public function __construct($email, $firstname, $lastname, $randomNumber = null)
    {
        $this->email     = trim($email);
        $this->firstName = trim(ucwords(strtolower($firstname)));
        $this->lastName  = trim(strtoupper($lastname));

        if (is_null($randomNumber)) {
            $this->createRandomNumber();

        } else {
            $this->randomNumber = $randomNumber;
        }

    }

    public function createRandomNumber()
    {
        $value = [$this->email, $this->firstName, $this->lastName];
        $this->randomNumber = substr(mt_rand(100, 999) . md5($value[mt_rand(0, 2)]), 0, 8);
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

    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }
}