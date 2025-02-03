<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Operadores Lógicos </title>
</head>
<body>

    <h2> Operadores Lógicos </h2>

    <?php 
    

        $quebraDeLinha = "<br></br>";


        // Utilizando AND e OR

        $idade = 20;
        $temCNH = true;

        echo($idade >= 18 and $temCNH) ? "Você Pode Dirigir." : "Você Não Pode Dirigir!";
        echo $quebraDeLinha;
        

        $temIngresso = false;
        $temCortesia = true;

        echo($temIngresso or $temCortesia) ? "Você Pode Entrar na Festa!" : "Você Não Pode Entrar na Festa.";
        echo $quebraDeLinha;


        // Utilizando && e ||

        $temSol = true;
        $semChuva = false;
        $feriado = true;

        echo($temSol && $semChuva || $feriado) ? "Você Pode Sair Para Passear!" : "Melhor Ficar em Casa...";


    ?>

</body>
</html>