<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Operadores Relacionais </title>

</head>
<body>


    <h2> Comparando Valores </h2>

    <?php

    $quebraDeLinha = "<br></br>";

    $varA = 100;
    $varB = "100";


    // Igualdade

    echo "<strong> <p> Igualdade <p> </strong>";

    echo ($varA == $varB) ? "São Iguais" : "Não São Iguais";
    echo $quebraDeLinha;
    echo ($varA === $varB) ? "São Estritamente Iguais" : "Não São Estritamente Iguais", $quebraDeLinha;


    // Diferença

    echo "<strong> <p> Diferença <p> </strong>";

    echo ($varA != $varB) ? "São Diferentes" : "Não São Diferentes";
    echo $quebraDeLinha;
    echo ($varA !== $varB) ? "São Estritamente Diferentes" : "Não São Estritamente Diferentes", $quebraDeLinha;


    // Negando Valores

    $teste = false;

    echo "<strong> <p> Negação <p> </strong>";

    echo (!$teste) ? "É Verdadeiro." : "É Falso.", $quebraDeLinha;


    // Maiores / Menores

    $varC = 25;
    $varD = 50;

    echo "<strong> <p> Maior e Menor <p> </strong>";

    echo ($varC > $varD) ? "O valor de C é maior que o valor de D" : "O valor de C não é maior que o valor de D";
    echo $quebraDeLinha;
    echo ($varC < $varD) ? "O valor de C é menor que o valor de D" : "O valor de C não é menor que o valor de D", $quebraDeLinha;


    // Maior ou Igual / Menor ou Igual

    $varE = 25;
    $varF = 25;
    $varG = 30;

    echo "<strong> <p> Maior ou Igual e Menor ou Igual <p> </strong>";

    echo ($varE >= $varF) ? "O valor de E é maior ou igual ao valor de F" : "O valor de E não é maior ou igual ao valor de F";
    echo $quebraDeLinha;
    echo ($varE <= $varG) ? "O valor de E é menor ou igual que o valor de D" : "O valor de E não é menor ou igual que o valor de G";

    ?>


</body>

</html>