<?php
//Exercício 1: Escreva um programa em PHP que exiba seu nome na tela.
$nome = "Rafael F.R Mecabô";

echo $nome.PHP_EOL;

//Exercício 2: Crie um programa em PHP que calcule a média de três notas e exiba o resultado
$nota1 = 8;
$nota2 = 4;
$nota3 = 7;
echo "Media das nota:" . (($nota1 + $nota2 + $nota3)/3).PHP_EOL;

//Exercício 3: Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
$metro = 7;
$centimetro = $metro * 100;

echo $centimetro.PHP_EOL;
//Exercício 4: Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.".PHP_EOL;
} else {
    echo "$ano não é bissexto.".PHP_EOL;
}
//Exercício 5: Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
$Celsius = 100;
$Fahrenheit =($Celsius * 9/5)+32;
echo "$Fahrenheit ºF";