<?php 

    class User {
        public $name;
        public $age;

        public function __construct($name, $age)
        {   
            echo __CLASS__ . ' created!';

            $this->name = $name;
            $this->age = $age;

        }

        public function __destruct()
        {
            echo 'class ends!';
        }

        public function sayHello()
        {
            return $this->name . ' Says hello';
        }
    }

    $user1 = new User('Ripon', 28);

    echo $user1->sayHello();