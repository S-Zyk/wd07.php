<?php


namespace App;

//Упражнение 2 и 3

class Worker2
{
    private $name = 'Иван';
    private $age = '25';
    private $salary = '1000';

    public function setName(){
        return $this->name;
    }
    public function getName(){
        return $this->name = 'Вася';
    }
    public function setAge(){
            $this->age = '25';

            //3

//        if ($this->checkAge($age)) {
//            $this->age = $age;
//        }
    }
    public function getAge(){
        return $this->age = 26;
    }
    public function setSalary(){
        return $this->salary;
    }
    public function getSalary(){
        return $this->salary = 2000;
    }

    //3

//    private function checkAge($age){
//        return $age >= 1 and $age <= 100;
//    }
}