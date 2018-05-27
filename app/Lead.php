<?php

namespace belsoft;

class Lead
{
    private $name;
    private $email;
    private $phone;
    private $message;

    public static $rules = [
        'name'      =>  'required',
        'email'     =>  'required|email',
        'phone'     =>  'required|digits:10',
        'message'   =>  'required'
    ];

    //    constructor
    public function __construct(){}

    //    getters
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getMessage()
    {
        return $this->message;
    }

    //    setters
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
}
