<?php

class Member
{
    public $name = "Raj";
    public $address = "Dhaka - 1216";
    public $age = '25';
    private $gf = "any";

    public function profile()
    {
        return 'Name : ' . $this->name . '<br>' .
            'Address : ' . $this->address . '<br>' .
            'Age : ' . $this->age . '<br>' .
            'GF : ' . $this->gf . '<br>';
    }

    public function profileInfo()
    {
        return array(
            'name' => $this->name
        );
    }

    public function info($name, $age)
    {
        return 'Name : ' . $name . '<br>' .
            'Age : ' . $age;
    }
}

// Object Initialization
$member = new Member();

// Object Property
// echo $member->name;

// Object method
// echo $member->profile();

// method array data converting to object 
// $profileInfo =  $member->profileInfo();
// echo $profileInfo['name'];

// method parameter pass
$info =  $member->info('Sajib', 25);
echo $info;
