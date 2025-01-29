<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Variáveis </title>
</head>
<body>

    <?php 
    
        // Variáveis

         $breakLine = "<br></br>";


        // String

        $nome = "Sami";


        // Int

        $idade = 20;


        // Float

        $peso = 52.125;


        // Boolean
        
        $solteiro = true;


  

        echo "Nome: $nome ", $breakLine, "Idade: ", $idade, $breakLine, "Peso: ", $peso, $breakLine, "Status: ", $solteiro ? "Solteiro" : "Casado";


        // Método Var_Dump: Utilizando o Para Exibir o Valor Booleano
        // var_dump($solteiro);


        // Convertendo Booleano Para String
        //echo $solteiro ? "Solteiro" : "Casado" ;

    ?>
    
</body>
</html>