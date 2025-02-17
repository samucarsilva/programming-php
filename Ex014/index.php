<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Teste de Mesa </title>
</head>
<body>


    <h2> Teste de Mesa </h2>


    <?php
    

        $quebraDeLinha = "<br></br>";


        // Teste de Mesa: serve para testar a execução do código passo a passo (facilita o entendimento)


        $a = 10;
        $b = 5;
        $c = 3;
    

        $a = $a + $b; // Resulta em Quinze (15)
        $b = $b * $c; // Resulta em Quinze (15)
        $c = $a - $c; // Resulta em Doze (12)


        // Exibindo os Valores de A, B e C

            echo "$a, $b, $c" . $quebraDeLinha;
     
        

    ?>


</body>
</html>