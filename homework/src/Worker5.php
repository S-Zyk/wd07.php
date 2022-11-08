<?php


namespace App;


class Worker5 extends User
{

    private $salary = '1000';

    public function getSalary(){
            return $this->salary;
    }
    public function setSalary(){
        return $this->salary= 2000;
    }

}