<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays e Matrizes</title>
</head>
<body>


    <h2> Arrays e Matrizes </h2>


    <?php


        $quebraDeLinha = "<br></br>";


         // Arrays Associativos

            $arrayAssociativo = [
                "nome" => "Sami",
                "idade" => "20",
                "cidade" => "SP"              
            ];


         // Exibindo o Array

            echo "Array Associativo" . $quebraDeLinha;

            print_r($arrayAssociativo["nome"] . $quebraDeLinha);

            $primeiroValor = reset($arrayAssociativo);
            echo $primeiroValor . $quebraDeLinha;


        // Arrays Indexados

            $arrayIndexado = [
                "Sami",
                "20",
                "SP"               
            ];

        
        // Array Multidirecional

            $arrayMultidirecional = [
                [1, 2, 3],
                [4, 5, 6],
                [7, 8, 9]
            ];

        
        // Exibindo o Array

            echo "Elemento No Índice [1] [2]: " . $arrayMultidirecional[1][2] . $quebraDeLinha;
        
        
        // Mesclando Arrays

            $primeiroArray = [1, 2, 3];
            $segundoArray = [4, 5, 6];

            $arrayMesclado = array_merge($primeiroArray, $segundoArray);

            print_r($arrayMesclado);


            echo $quebraDeLinha;
        
        
        // Procurando Elemento

            $terceiroArray = [
                10, 20, 30, 40, 50
            ];


            $indice = array_search(30, $terceiroArray);
            echo "O índice do valor 30 equivale a: $indice" . $quebraDeLinha;


        // Verificando Existência

            $valorProcurado = 25;
            $valorExiste = in_array($valorProcurado, $terceiroArray);
            

            if($valorExiste){
                echo "O valor ", $valorProcurado, " dentro do terceiro array existe!" . $quebraDeLinha;

            }else {
                echo "O valor ", $valorProcurado, " dentro do terceiro array não existe!" . $quebraDeLinha;
            }
        
        
        // Exemplo Matriz 3x2

            $exemploMatriz = [
                [1, 2], // Primeira Linha
                [4, 5], // Segunda Linha
                [7, 8]  // Terceira Linha
            ];

        
            echo "Elemento no Índice [0] [1]: ", $exemploMatriz[0][1] . $quebraDeLinha;
            echo "Elemento no Índice [2] [0]: ", $exemploMatriz[2][0];

            
    ?>


</body>
</html>