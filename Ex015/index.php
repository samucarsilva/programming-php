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


                echo "<h4> Pessoa </h4>";


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
            $geovanna = new Pessoa();

            $geovanna -> nome = "Geovanna";
            $geovanna -> idade = 20;


        // Exibindo a Saudação
            $geovanna -> saudacao();



        // Criando Uma Classe


                echo "<h4> Carro </h4>";


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


                echo "<h4> Produto </h4>";


            class Produto {


                // Atributos

                    public $nome;
                    public $preco;


                // Métodos



                // Construtor: chamado automaticamente quando um objeto é criado (instanciado); geralmente, é utilizado para inicializar atributos

                    public function __construct($nome, $preco) {

                        global $quebraDeLinha;

                        $this -> nome = $nome;
                        $this -> preco = $preco;

                        echo "O produto \"$this->nome\" foi criado com sucesso!" . $quebraDeLinha;

                    }


                // Destrutor: chamado automaticamente quando uma referência a um objeto específico é inexistente

                    public function __destruct() {

                        global $quebraDeLinha;

                        echo "O produto \"$this->nome\" foi removido com sucesso..." . $quebraDeLinha;

                    }
                
                
                // Exibir Detalhes do Produto

                    public function exibirDetalhes() {

                        global $quebraDeLinha;

                        echo "Nome: $this->nome" . $quebraDeLinha . "Preço: R$ ", number_format($this->preco, 2, ",", ".") . $quebraDeLinha;

                    }


            }


        // Instanciando Objetos
            $produto01 = new Produto("Camiseta", 39.90); // O método construtor está sendo chamado
            $produto02 = new Produto("Calça Jeans", 69.00);


            $produto01->exibirDetalhes(); // Exibindo detalhes do primeiro produto


            unset($produto01); // Removendo o produto com o método unset (Chama o método destruidor explicitamente)
            unset($produto02); // ^



        // Criando Uma Classe


                echo "<h4> Banco </h4>";


            class ConexaoBanco {

                // Atributos


                    private $conexao;


                // Métodos



                // Construtor: simula abrir a conexão com o banco de dados

                    public function __construct() {

                        global $quebraDeLinha;

                        $this -> conexao = "A conexão ao banco de dados foi aberta!";

                        echo $this->conexao . $quebraDeLinha;

                    }


                // Destrutor: simula fechar a conexão com o banco de dados

                    public function __destruct() {

                        global $quebraDeLinha;

                        $this -> conexao = "A conexão com o banco de dados foi fechada.";

                        echo $this->conexao . $quebraDeLinha;

                    }


            }


        // Instanciando Objetos
            $conectarAoBanco = new ConexaoBanco(); // O construtor está sendo chamado


    ?>


</body>
</html>