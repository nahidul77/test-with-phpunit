<?php 
namespace App\models;

class User 
{
    
    public $first_name ;
    public $last_name ;
    
    public function setFirstName($firstName){
        $this->first_name = $firstName;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function setLastName($lastName){
        $this->last_name = $lastName;
    }

    public function getLastName(){
        return $this->last_name;
    }
}