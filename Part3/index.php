<?php

class Member extends Payment
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

class Payment
{
    public function balanceInfo()
    {
        return array(
            'balance' => 500,
            'date' => date('Y-m-d')
        );
    }
}

// Object Initialization
$member = new Member();

// method
// $profile =  $member->profile();
// echo $profile;

$balance =  $member->balanceInfo();
echo '<pre>';
print_r($balance);
