<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Condicionais </title> 
</head>
<body>


    <h2> Estruturas Condicionais </h2>
    

    <?php 
    

        $quebraDeLinha = "<br></br>";

        $valorX = 10;
        $valorY = 20;


        $idade = 20;
        

        // IF-ELSE

            if ($idade >= 18) {
                echo "Você é maior de idade!" . $quebraDeLinha;
            } else {
                echo "Você é menor de idade." . $quebraDeLinha;
            }

        
        // ELSE-IF

            if ($idade < 13) {
                echo "Você é uma criança.";
            
            } else if ($idade >= 13 && 
                        $idade < 20) {
                echo "Você é um adolescente.";
            
            } else if ($idade >= 20 &&
                        $idade < 60) {
                echo "Você é um adulto.";
            
            } else if ($idade >= 60) {
                echo "Você é um idoso.";
            
            }
    


    ?>

</body>
</html>