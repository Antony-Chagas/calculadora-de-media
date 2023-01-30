<?php

include __DIR__ . "/calculadora.php";

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];
$nota5 = $_POST['nota5'];



$somaDasNotas = $nota1 + $nota2 + $nota3 + $nota4 + $nota5;
$media = $somaDasNotas/ 5;

if ($media > 5) {
    echo "<h3>" . " Aprovado, sua média final é " . $media.".</h3>";
} else {
    echo "<h3>" . " Reprovado, sua média final é " . $media.".</h3>";
}
