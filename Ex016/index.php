<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Modificadores de Acesso </title>
</head>
<body>


    <h2> Paradigma Orientado a Objetos </h2>
    <h3> Modificadores de Acesso </h3>


    <?php

        $quebraDeLinha = "<br></br>";


        // Modificadores de Acesso: permitem controlar a visibilidade e o acesso aos atributos e métodos de uma classe


        // Criando uma Classe

            class Funcionario {


                // Atributos

                    public $nome; // Pode ser acessado de qualquer lugar
                    protected $salario; // Pode ser acessado apenas dentro da superclasse ou subclasse
                    private $cpf; // Pode ser acessado somente dentro da classe

                
                // Métodos

                    
                    // Construtor

                        public function __construct($nome, $salario, $cpf) {

                            $this->nome = $nome;
                            $this->salario = $salario;
                            $this->cpf = $cpf;

                        }


                    // Exibir Nome

                        public function exibirNome() {

                            global $quebraDeLinha;

                            echo "Nome: $this->nome" . $quebraDeLinha;

                        }


                    // Exibir Salário

                        protected function exibirSalario() {

                            global $quebraDeLinha;

                            echo "Salário: R$ ", number_format($this->salario, 2, ",", ".") . $quebraDeLinha;

                        }


                    // Exibir CPF

                        private function exibirCPF() {

                            global $quebraDeLinha;

                            echo "CPF: $this->cpf" . $quebraDeLinha;

                        }


                    // Exibir Detalhes

                    public function exibirDetalhes() {

                        $this->exibirNome();
                        $this->exibirSalario();
                        $this->exibirCPF();

                    }


            }


        // Instanciando Objetos
            $samuel = new Funcionario("Samuel", 5000, "123.456.789-0");

            echo "<strong> <p> Exibindo Apenas o Nome </p> </strong>";
            $samuel->exibirNome();


            echo "<strong> <p> Exibindo os Detalhes </p> </strong>";
            $samuel->exibirDetalhes(); // Criar esse tipo de método não é recomendado


    ?>


</body>
</html>