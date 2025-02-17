<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Classes e Objetos </title>
</head>
<body>


    <h2> Paradigma Orientado a Objetos </h2>
    <h3> Classes e Objetos </h3>


    <?php


        $quebraDeLinha = "<br></br>";


        // Criando Uma Classe


            class Pessoa {


                // Atributos

                    public $nome;
                    public $idade;


                // Métodos

                    public function saudacao() {

                        global $quebraDeLinha;

                        echo "Olá, meu nome é " . $this -> nome . " e tenho " . $this -> idade . " anos..." . $quebraDeLinha;

                    }


            }


        // Instanciando um Objeto
            $Geovanna = new Pessoa();

            $Geovanna -> nome = "Geovanna";
            $Geovanna -> idade = 20;


        // Exibindo a Saudação
            $Geovanna -> saudacao();



        // Criando Uma Classe

            class Carro {


                // Atributos

                    public $marca;
                    public $modelo;
                    public $ano;


                // Métodos

                    public function exibirDetalhes() {

                        global $quebraDeLinha;

                        echo "Marca: " . $this -> marca . $quebraDeLinha;
                        echo "Ano: " . $this -> ano . $quebraDeLinha;
                        echo "Modelo: " . $this -> modelo . $quebraDeLinha;

                    }


            }


        // Instanciando um Objeto
            $meuCarro = new Carro();

            $meuCarro -> marca = "Toyota";
            $meuCarro -> ano = 2023;
            $meuCarro -> modelo = "Corolla";


        // Exibindo os Detalhes
            $meuCarro -> exibirDetalhes();



        // Criando Uma Classe


            class Produto {


                // Atributos

                    public $nome;
                    public $preco;


                // Métodos



                // Construtor: Chamado automaticamente quando um objeto é criado (instanciado)

                    public function __construct($nome, $preco) {

                        global $quebraDeLinha;

                        $this -> nome = $nome;
                        $this -> preco = $preco;

                        echo "O produto \"$this->nome\" foi criado com sucesso!" . $quebraDeLinha;
                        echo "O valor do produto \"$this->nome\" equivale a R$ ", number_format($this->preco, 2, ",", ".") . $quebraDeLinha;

                    }


            }


        // Instanciando Objetos
            $produtoUm = new Produto("Camiseta", 39.90); // O construtor está sendo chamado
            $produtoDois = new Produto("Calça Jeans", 69.00);


            // Destrutor: 


    ?>


</body>
</html>