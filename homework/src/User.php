<?php


namespace App;


class User
{
    protected $name = 'Иван';
    protected $age = 25;


    public function setName() {
        return $this->name;
    }
    public function getName() {
        return $this->name = 'Вася';
    }
    public function setAge() {
        return $this->age;
}
    public function getAge() {
        return $this->age=26;
    }
}