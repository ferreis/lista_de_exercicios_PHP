
# Lista de exercícios

1. Escreva um programa em PHP que exiba seu nome na tela.
2. Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
3. Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
4. Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
5. Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
6. Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
7. Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
8. Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).uma variável (inteiro representando as horas).
9. Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].
10. Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
    * Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.
11. Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
12.  Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array. 

## Desafio
 - implemente um código, que vai ser parecido com um banco.
### Exemplo de tela:
````
********************
Titular: nomeCliente
Saldo atual: R$ 0000,00
*********************
1 - Consultar saldo atual
2 - Depositar
3 - Sacar
4 - Sair
````
### Objetivos: 
1. #### Consultar Saldo Atual:
    * O cliente deve ser capaz de verificar o saldo atual da conta corrente.
2. #### Depositar:
    * O cliente deve poder depositar dinheiro na conta.
      * Implemente uma função que solicita o valor a ser depositado e adiciona esse valor ao saldo atual.
    * Pergunte ao cliente se ele realmente deseja depositar o valor informado na conta X.
    * Após confirmar o depósito, mostre o novo saldo da conta.
    * Pergunte se o cliente deseja fazer mais alguma operação.
3. #### Sacar:
    * Implemente uma função que permite ao cliente sacar dinheiro da conta.
    * Solicite o valor a ser sacado e verifique se há saldo suficiente.
    * Se houver saldo, subtraia o valor do saldo atual e mostre o novo saldo.
    * Caso contrário, informe que não há saldo suficiente.
4. #### Sair:
    * Implemente uma opção para o cliente sair do programa.
