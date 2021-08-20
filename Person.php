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
        echo "Age: " . $this->age . "\n";
        echo "Name: " . $this->name . "\n";
    }
}