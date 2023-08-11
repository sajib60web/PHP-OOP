<?php

class Member
{
    public $name = "Raj";

    public function profile()
    {
        return 'Name : ' . $this->name;
    }
}

// Object Initialization
$member = new Member();

$balance =  $member->profile();
print_r($balance);
