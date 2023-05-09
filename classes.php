<?php
class Person
{
  public $firstname;
  public $lastname;
   //methods to display full name
   Public function displayFullName(){
    echo "Full Name : {$this->firstname} {$this->lastname} ";
   }
}
//creating a new person object
$person1= new Person();
//set the values of the properties

$person1->firstname='Kabanda';
$person1->lastname='Orlane';
$person1->displayFullName();
?>