<?php
include_once 'EmergencyDepartment.php';

$ed = new EmergencyDepartment();

for ($i = 1; $i < 6; $i++) {
    $rand = rand(1, 6);
    $patient = new Patient("Bệnh nhân $i", $rand);
    $ed->add($patient);
}

echo "<pre>";
var_dump($ed);
echo "<hr>";

var_dump($ed->get());
echo "<hr>";

var_dump($ed->get());
echo "<hr>";

var_dump($ed);
echo "<hr>";

