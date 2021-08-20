<?php

spl_autoload_register(function ($className)
{
    include $className . '.php';
});

$patient = new Patient();
$doctor = new Doctor();
$hos = new Polyclinic($patient, $doctor);
echo "--------- Input list of patients: ---------\n";
$hos -> inputListPatient();
echo "\n--------- Input list of doctors: ----------\n";
$hos -> inputListDoctor();
echo "\n--------- List of patients: ----------\n";
$hos -> printListPatient();
echo "\n--------- List of doctors: ----------\n";
$hos -> printListDoctor();
