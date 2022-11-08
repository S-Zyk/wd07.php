<?php


namespace App;


class Worker4
{
public function __construct(private $name,private $salary,private $age)
{

}

    public function getName(){
        echo $this->name;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function getAge(){
        return $this->age;
    }

}