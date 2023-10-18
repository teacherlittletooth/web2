<?php

//Variáveis

$name = "Paulo André"; //string
$birth = 2013; //int
$age = (2023 - $birth); //op. aritmético

print("Bem vindo " . $name . "!<br>");
print("Idade atual: " . $age . "<br>");

$ageInDays = ($age * 365);
print("Dias vividos: " . $ageInDays . " dias.<br>");

$ageInHours = ($ageInDays * 24);
print("Horas vividas: " . $ageInHours . " horas.<br>");

if($age <= 18) {
    echo "Jovem 👶";
} else if($age > 18 && $age <= 65) {
    echo "Maduro 👨";
} else {
    echo "Idoso 👴";
}
