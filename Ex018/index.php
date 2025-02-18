<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> POO — Polimorfismo </title>
</head>
<body>


    <h2> Paradigma Orientado a Objetos </h2>


    <?php


        $quebraDeLinha = "<br></br>";        


        // Criando uma Classe
        // SuperClasse


                echo "<h3> Polimorfismo </h3>";


            class Animal {


                // Atributos



                // Métodos


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


                // Atributos



                // Métodos


                        // Sobreescrevendo o método EmitirSom

                            public function emitirSom() {

                                return "Au... Au... Auauauau!";

                            }


            }


        // Criando uma Classe
        // SubClasse

            class Gato 
                    extends Animal {


                // Atributos



                // Métodos


                        // Sobreescrevendo o método EmitirSom

                            public function emitirSom() {

                                return "Miaaaaaaau!";

                            }


            }


        // Instanciando Objetos
            $cachorro = new Cachorro();
            $gato = new Gato();

            echo $cachorro->emitirSom() . $quebraDeLinha;
            echo $gato->emitirSom() . $quebraDeLinha;


        // Função Que Usa Polimorfismo

            function emitirSomAnimal(Animal $animal) {

                global $quebraDeLinha;

                echo $animal->emitirSom() . $quebraDeLinha;

            }


        // Chamando a Função com Diferentes Objetos
        
            emitirSomAnimal($cachorro);
            emitirSomAnimal($gato);


    ?>


</body>
</html>