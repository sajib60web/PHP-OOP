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
}

$member = new Member();

echo $member->name . '<br>';
echo $member->address . '<br>';
echo $member->age . '<br>';
echo $member->profile();
