<?php
class User {
    // Properties

    public $name;

    public $birthDay; // Expected format: YYYY-MM-DD

    public $gender;

    public $city;


    //Metthoods

    function setName($name){

        $this->name = $name;

    }

    function getName(){

        return $this->name;
        
    }

    function setBirthDay($birthDay){

        $this->birthDay = $birthDay;
        
    }

    function getBirthDay(){

        return $this->birthDay;
        
    }


    function setGender($gender){

        $this->gender = $gender;
        
    }

    function getGender(){

        return $this->gender ;
        
    }


    function setCity($city){

        $this->city = $city;
        
    }

    function getCity(){

        return $this->city ;
        
    }

    function getAge(){

        $birthDate = new DateTime($this->birthDay); // Convert birthday to DateTime object

        $today = new DateTime(); // Get current date

        $age = $today->diff($birthDate)->y; // Calculate difference in years

        return $age;

    } 

}