<?php

class User {
    
    // public $name = "Ripon";

    public $name;

    public function sayHello()
    {
        return  $this->name . ' says ' . 'Hello';
    }

}

$user1 = new User();
$user1->name = "mahalo";
echo $user1->sayHello();


echo '<br>'; 


$user2 = new User();
$user2->name = "ripon";
echo $user2->sayHello();