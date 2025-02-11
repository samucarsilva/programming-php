<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Funções </title>
</head>
<body>
    

    <h2> Funções </h2>


    <?php


         $quebraDeLinha = "<br></br>";


        // FUNÇÃO: bloco de código que serve para executar uma tarefa específica; são reutilizáveis


            function mensagem() {
                global $quebraDeLinha;
                echo "Olá, Seja Bem-Vindo(a)!" . $quebraDeLinha;
            }


            function soma($a, $b) {
                return $a + $b;
            }
        
        
            function mensagemPersonalizada($nome = "Visitante") {
                global $quebraDeLinha;
                echo "Olá, $nome!" . $quebraDeLinha ."Seja Bem-Vindo(a) ao sistema..." . $quebraDeLinha;
            }
        
        
        // Chamando a Função Mensagem

            mensagem();

        
        // Chamando a Função Soma

            $resultado = soma(100, 25);
            echo "O resultado da soma equivale a ", $resultado . $quebraDeLinha;

        
        // Chamando a Função Personalizada

            mensagemPersonalizada(); // Chamada Sem Argumento: utiliza o valor modelo (Visitante)
            mensagemPersonalizada("Sam"); // Chamada Com Argumento: utiliza o valor passado
        
        
            
    ?>


</body>
</html>