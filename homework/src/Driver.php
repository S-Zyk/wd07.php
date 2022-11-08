<?php


namespace App;


class Driver extends Worker5
{
    private $drexperience;
    private $drcat;

    public function getExperience(){
        return $this->drexperience;
    }

    public function getCat(){
        return $this->drcat;
    }
}