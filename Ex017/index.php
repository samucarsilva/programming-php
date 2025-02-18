<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> POO — Herança </title>
</head>
<body>


    <h2> Paradigma Orientado a Objetos </h2>


    <?php


        $quebraDeLinha = "<br></br>";        


        // Criando uma Classe
        // SuperClasse


                echo "<h3> Herança </h3>";


            class Animal {


                // Atributos

                    public $nome;


                // Métodos


                    // Construtor

                        public function __construct($nome) {
                            $this->nome = $nome;
                        }


                    // Emitir Som

                        public function emitirSom() {

                            global $quebraDeLinha;

                            echo "O animal emite um som..." . $quebraDeLinha;

                        }


            }



        // Criando uma Classe
        // SubClasse

            class Cachorro 
                    extends Animal {


                // Métodos


                        // Sobreescrevendo o método EmitirSom

                            public function emitirSom() {

                                global $quebraDeLinha;

                                echo "Au... Au... Auauauau!" . $quebraDeLinha;

                            }


            }


        // Instanciando Objetos
            $cachorro = new Cachorro("Caramelo");

            echo $exibirNome = "$cachorro->nome" . $quebraDeLinha;

            $cachorro->emitirSom();


            $animal = new Animal("Animal");

            echo "$animal->nome" . $quebraDeLinha;

            $animal->emitirSom();


    ?>


</body>
</html>