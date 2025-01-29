<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Operadores II </title>
</head>
<body>
    

    <?php 
    
        $breakLineHtml = "<br></br>";

        
        // Atribuindo Valor Com Concatenação

        $nomeDaRua = "Rua Amador Bueno";
        $nomeDaRua .= " - Largo Treze, SP";

        $precoProduto = 2.5;
        $precoProduto += 7.2;
        $precoProduto -= 1.5;

        $valorDePi = 3.141592653;
        
        
        // Utilizando um Método Para Utilizar Vírgula Como Separador de Decimal

        $valorFormatado = number_format($valorDePi, 2, ',', '.');


        // Exibindo Valores Com o Comando Echo

        
        echo "$nomeDaRua", "<br>" ,"PI: ","$valorFormatado", "<br>";
        echo "$precoProduto";


    ?>


</body>
</html>