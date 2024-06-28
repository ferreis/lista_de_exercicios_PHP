<?php

global $contaBancaria;

main();
function main()
{
    $contaBancaria = [
        'Titular' => 'Rafael Ferreis',
        'Saldo' => (float)100,
    ];
    $sair = false;
    while ($sair === false) {
        limparTela();
        desenhaMenu($contaBancaria);

        $opcao = fgets(STDIN);
        switch ($opcao) {
            case 1:
                echo "Opção 1";
                consultar($contaBancaria);
                break;
            case 2:
                $contaBancaria['Saldo'] += depositar($contaBancaria);
                consultar($contaBancaria);
                esperar();
                break;
            case 3:
                $contaBancaria['Saldo'] -= sacar($contaBancaria);
                break;
            case 4:
                $sair = true;
                break;
        }
    }
}

function sacar($contaBancaria)
{
    echo "Quanto deseja sacar? ";
    $valor = (float) fgets(STDIN);
    if ($valor <= $contaBancaria['Saldo']) {
        return $valor;
    }
    echo "Saldo insuficiente\n";

    return;
}

function depositar($contaBancaria)
{
    echo "Quanto deseja depositar: ";
    $valor = (float) fgets(STDIN);
    echo "Deseja depositar: R$ $valor na conta {$contaBancaria['Titular']}? \n 1 - Sim | 2 - Não\n";
    $confirmacao = fgets(STDIN);
    if ($confirmacao == 1) {
        return $valor;
    } else if($confirmacao == 2){
        return;
    }else{
        echo "Valor opção digitado invalido";
        esperar();
        return;
    }
}
function esperar()
{
    echo "\nPressione qualquer tecla para prosseguir\n";
    fgets(STDIN);
}

function desenhaMenu($contaBancaria)
{
    echo "
********************
Titular: {$contaBancaria['Titular']}
Saldo atual: R$ {$contaBancaria['Saldo']}
*********************
1 - Consultar saldo atual
2 - Depositar
3 - Sacar
4 - Sair
";
}

function limparTela()
{
    echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J';
}

function consultar($contaBancaria)
{
    echo "O saldo da {$contaBancaria['Titular']} é R${$contaBancaria['Saldo']}";
}
