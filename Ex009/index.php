<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Condicional Switch </title>
</head>
<body>


    <h2> Condicional Switch </h2>

    
    <?php 
    

        $quebraDeLinha = "<br></br>";


        $fruta = "Maçã";
        $cor = "Azul";
        $numero = 10;


        switch ($fruta) {
            case "Maçã":
            echo "A fruta é uma $fruta" . $quebraDeLinha;
                break;

            case "Banana":
            echo "A fruta é uma $fruta" . $quebraDeLinha;
                break;

            case "Pera":
            echo "A fruta é uma $fruta" . $quebraDeLinha;
                break;
            
            case "Laranja":
            echo "A fruta é uma $fruta" . $quebraDeLinha;
                break;
            
            case "Uva":
            echo "A fruta é uma $fruta" . $quebraDeLinha;
                break;
            
            default:
            echo "Nenhuma fruta disponível para consumo..." . $quebraDeLinha;
                break;
        }


        switch ($cor) {
            case "Vermelho":
            case "Laranja":
                echo "A cor é quente" . $quebraDeLinha;
                    break;
            case "Azul":
            case "Verde":
                echo "A cor é fria" . $quebraDeLinha;
                break;
            default:
                echo "A cor é desconhecida pelo sistema..." . $quebraDeLinha;
        }


        

        switch (true) {
            case (is_numeric($numero) && 
                    $numero < 5):
                echo "O número é menor que cinco" . $quebraDeLinhas;
                    break;

            case (is_numeric($numero) && 
                    $numero == 5):
                echo "O número é igual a cinco" . $quebraDeLinha;
                    break;

            case (is_numeric($numero) && 
                    $numero > 5):
                echo "O número é maior que cinco" . $quebraDeLinha;
                    break;
            
            default:
                echo "O número não foi identificado..." . $quebraDeLinha;
                    break;
        }
    

    ?>


</body>
</html>