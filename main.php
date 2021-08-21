<?php

spl_autoload_register(function ($className)
{
    include $className . '.php';
});

function printMenu()
{
    echo "--------- \n";
    echo "MENU: \n";
    echo "1. Add list of patients: \n";
    echo "2. Add list of doctors: \n";
    echo "3. Print BD \n";
    echo "4. Exit \n";
    echo ">";
}

function getMenuItem()
{
    $ans = -1;
    $flag = false;
    while ($flag == false) {
        $item = readline();
        if (ctype_digit($item)) {
            if ($item >= 1 && $item <= 4) {
                $ans = $item;
            }
        }
        if ($ans != -1) {
            $flag = true;
            break;
        }
        else {
            echo "Incorrect input.Try again \n";
            echo ">";
        }
    }
    return $ans;
}

function menu($hos)
{
    do {
        printMenu();
        $item = getMenuItem();
        switch ($item) {
            case 1:
                echo "--------- Input list of patients: ---------\n";
                $hos->inputListPatient();
                break;
            case 2:
                echo "\n--------- Input list of doctors: ----------\n";
                $hos->inputListDoctor();
                break;
            case 3:
                $hos->printDataBase();
                break;
        }
    } while($item != 4);
}

/*
 * До паттернов:
 * $patient = new Patient();
 * $doctor = new Doctor();
 * $hos = new Polyclinic($patient, $doctor)
 *
 * Singletone:
 * $patient = new Patient();
 * $doctor = new Doctor();
 * $hos = Polyclinic::getInstance($patient, $doctor);
 *
 * Singletone + Factory:
 * $factory = new Factory();
 * $hos = $factory->build();
 */

$factory = new Factory();
$hos = $factory->build();
menu($hos);
