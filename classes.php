<?php

//what is class and instant 

class Person {
    public string $name;
    public int $age;
    private ?float  $salary;

    public function __construct($n,$s,$a){
        $this-> name = $n;
        $this->age = $a;
        $this-> salary = $s;
    }

    public function getSalary(){
        return $this-> salary ;

    }
    public function setSalary($s){
        $this-> salary = $s;
    }
}

$p = new Person('bob',12,1000);