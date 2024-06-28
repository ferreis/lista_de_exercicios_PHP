<?php
//Exercício 6:Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
for ($index = 0; $index <= 100;$index++){
    if ($index%2==1){
        echo "$index - ";
    }
}
//Exercício 7:Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
echo PHP_EOL;

$peso = 107;
$altura = 1.80;

$IMC = $peso/$altura**2;
if($IMC <= 18.5){

}else if ($IMC > 18.5 && $IMC <= 24.9){
    echo "IMC: $IMC \nCLASSIFICAÇÃO:Magreza \nOBESIDADE (GRAU): 0 ".PHP_EOL;

}else if ($IMC > 24.9 && $IMC <= 29.9){
    echo "IMC: $IMC \nCLASSIFICAÇÃO:Normal \nOBESIDADE (GRAU): 0 ".PHP_EOL;

}else if ($IMC > 29.9 && $IMC <= 39.9){
    echo "IMC: $IMC \nCLASSIFICAÇÃO:Sobrepeso \nOBESIDADE (GRAU): I ".PHP_EOL;

}else if ($IMC > 39.9 && $IMC <= 49.9){
    echo "IMC: $IMC \nCLASSIFICAÇÃO:Obesidade \nOBESIDADE (GRAU): II ".PHP_EOL;
}else if ($IMC >= 40.0){
    echo "IMC: $IMC \nCLASSIFICAÇÃO:Obesidade Grave \nOBESIDADE (GRAU): III ".PHP_EOL;
}else{
    echo "Valor digitado invalido!";
}

//Exercício 8:Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite)
//dependendo do horário encontrado em uma variável (inteiro representando as horas).

$horas = 16;

if ($horas >= 6 && $horas < 12){
    echo "Bom dia".PHP_EOL;
}else if ($horas >= 12 && $horas < 18){
    echo "Boa tarde".PHP_EOL;
}else{
    echo "Boa noite".PHP_EOL;
}