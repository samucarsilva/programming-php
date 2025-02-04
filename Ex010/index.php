<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array List </title>
    <style> 
        body {
            background-color: #2D2D2D;
            color: white;
        }
    </style>
</head>
<body>


    <h2> Array Lists </h2>


    <?php 
    

        $quebraDeLinha = "<br></br>";


            $arrayList = [10, 20, 30, 40];


        // Exibe o Array de Forma Legível

            echo "Array Original: " . $quebraDeLinha;
            print_r($arrayList);
            echo $quebraDeLinha;


        // Adicionando Um Elemento Adicional ao Final do Array

        $arrayList[] = 50;


            echo "Array Com Elemento Adicionado: " . $quebraDeLinha;
            print_r($arrayList);
            echo $quebraDeLinha;


        // Alterando o Valor da Primeira Posição (de 20 Para 30)

            $arrayList[1] = 25;


            echo "Array Com o Segundo Índice Alterado: " . $quebraDeLinha;
            print_r($arrayList);
            echo $quebraDeLinha;


        // Removendo Um Valor do Terceiro Índice do Array

            unset($arrayList[3]);
            echo "Array Com o Terceiro Índice Removido: " . $quebraDeLinha;
            print_r($arrayList);
            echo $quebraDeLinha;


        // Reorganizando Os Índices do Array ("Unir Listas Separadas") e Exibindo-os Novamente

            $arrayList = array_values($arrayList);

            echo "Array Reorganizado: " . $quebraDeLinha;
            print_r($arrayList);


        // Permite Ordenar Um Array de Forma Crescente

            sort($arrayList);



    ?>


</body>
</html>