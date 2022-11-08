<?php

//1

//$worker = new \App\Worker();
//    $worker ->name ='Иван';
//    $worker ->age = 25;
//    $worker ->salary = 1000;
//
//$worker2 = new \App\Worker();
//    $worker2 -> name = 'Вася';
//    $worker2 -> age = 26;
//    $worker2 -> salary =2000;
//
//    $a=$worker ->salary = 1000;
//    $b=$worker2 -> salary =2000;
//    $c=$a+$b;
//
//$age1=$worker ->age = 25;
//$age2= $worker2 -> age = 26;
//$agesum=$age1+$age2;
//
//echo "<pre>";
//echo $c;
//echo "<br>";
//echo $agesum;
//echo "</pre>";


//2 and 3
//    $user1 = new \App\Worker2();
//    $user1 ->setAge();
//    $user1 ->setName();
//    $user1->setSalary();
//
//    $user2 = new \App\Worker2();
//    $user2 ->getAge();
//    $user2 ->getName();
//    $user2->getSalary();
//
//    $a = $user1->setSalary();
//    $b = $user2->getSalary();
//    $c = $a + $b;
//
//    $d = $user1 ->setAge();
//    $g = $user2 ->getAge();
//    $f = $d + $g;
//
//echo "<pre>";
//print_r($c);
//echo "<br>";
//print_r($f);
//echo "</pre>";


//4

//$worker4 = new \App\Worker4('Дима','1000', '25');
//
//$a = $worker4->getAge();
//$b = $worker4->getSalary();
//$c=$a*$b;
//
//$worker4->getName();
//print_r($c);

//5

//$user1 = new \App\Worker5();
//    $user1 ->getAge();
//    $user1 ->getName();
//    $user1->getSalary();
//
//$user2 = new \App\Worker5();
//$user2 ->setAge();
//$user2 ->setName();
//$user2->setSalary();
//
//$a=$user1->getSalary();
//$b=$user1->setSalary();
//$c = $a + $b;
//
//
//print_r($c);


//6

$user = new \App\Driver();

print_r($user);
