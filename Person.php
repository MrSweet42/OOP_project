<?php

class Person
{
    protected int $age;
    protected string $name;

    function __construct()
    {
        // print "FOR ME: class Man initialized \n";
        $this->age = 0;
        $this->name = "None";
    }

    function inputPerson()
    {
        echo "Age: ";
        $this->age = readline();
        echo "Name: ";
        $this->name = readline();
    }
    function printPerson()
    {
        echo $this->age . "\t\t";
        echo $this->name . str_repeat(" ", 14-strlen($this->name));
    }
}