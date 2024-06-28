<?php
//Exercício 9: Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e
// exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].
$lista = [1, 2, 2, 3, 4, 4, 5, 1, 2, 1, 3];
$listaDuplicatas = array_unique($lista);
var_dump($listaDuplicatas);
echo PHP_EOL.PHP_EOL;

//Exercício 10: Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o
// aluno foi aprovado ou não. Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $notaFinal = $nota > 6 ? "aprovado" : "reprovado";
    echo "Aluno foi $notaFinal com a nota $nota \n";
}
echo PHP_EOL.PHP_EOL;


//Exercício 11: Defina um array associativo que representa uma conta bancária (com titular e saldo)
// e exiba suas informações na tela.
$contaBancaria = [
    'titular' => 'Rafael F. R. Mecabô',
    'saldo' => 3000.00,
];
echo "O titular da conta: $contaBancaria[titular] \nsaldo: R$$contaBancaria[saldo]";
echo PHP_EOL.PHP_EOL;


//Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
 $familiares = ['Rafael', 'Fernando', 'luiz', 'isadora'];
 $familiares[] = 'Lucas';
 var_dump($familiares);
