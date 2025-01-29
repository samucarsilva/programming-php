<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Operadores </title>


</head>
<body>


    <?php 


        $breakLineHtml = "<br></br>";
        $breakLine = "\n";
        

        $texto_Operadores = "<h2>Operadores</h2>";
        $texto_Expressoes = "<h3>Expressões</h3>";

        

        // Operadores Aritméticos
        // Adi: +
        // Sub: -
        // Mult: *
        // Div: /
        // Mód: %
        // Pot: **


        // Ordem de Grandeza
        // 1- Parênteses
        // 2- Potência
        // 3- Multiplicação e Divisão
        // 4- Adição e Subtração

        
        echo "$texto_Operadores";


        $adicao = 25 + 75;
        $subtra = 30 - 50;
        $multip = 5 * 10;
        $divis = 10 / 5;
        $modulo = 10 % 2;
        $potencia = 2 ** 5;
    
        
        echo "O resultado da soma é igual a $adicao" . $breakLineHtml;

        echo "O resultado da diferença é igual a $subtra" . $breakLineHtml;

        echo "O resultado do produto é igual $multip" . $breakLineHtml;

        echo "O resultado da razão é igual a $divis" . $breakLineHtml;

        echo "O resultado do módulo é igual a $modulo" . $breakLineHtml;

        echo "O resultado da potência é igual a $potencia" . $breakLineHtml;        


        // Expressões Matemáticas

        echo "$texto_Expressoes";


        $primeiraExpressao = (3 + 2) * 5;
        $segundaExpressao = (2 * (3 + (5 - 2))) + 8;

        $valorA = 20;
        $valorB = 30;
        $valorC = 50;

        $terceiraExpressao = $valorA + $valorB + $valorC;

        echo "Resultado Primeira Expressão: ", $primeiraExpressao, "$breakLineHtml";
    
        echo "Resultado Segunda Expressão: ", $segundaExpressao, $breakLineHtml;

        echo "Resultado Terceira Expressão: ", $terceiraExpressao, $breakLineHtml;


    ?>


</body>
</html>