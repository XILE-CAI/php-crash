<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    // properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;


    //a constructor is a method  that runs when an object is created
    public function __construct($name,$email,$password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    ///methods ia  functions belong to a class
    function set_name($name){
        $this->name = $name;
    }

}

//Instialize a user object
$user1 = new User('bryan','bryan@gmail.com','123qwe');

$user1->name = 'bryan';

var_dump($user1);
echo $user1->name;

$user1->set_name('John');
echo $user1->name;

// Inheritence

class Employee extends User{
    public function __construct($name,$email,$password,$title){
        parent::__construct($name,$email,$password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}