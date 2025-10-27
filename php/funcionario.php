<?php
    namespace Projeto\php;
    require_once('pessoa.php');
    use Projeto\php\Pessoa;

    class Funcionario extends Pessoa{
        protected float $salario;

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, float $salario)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->salario = $salario;

        }
        
          //get set

          public function __get(string $dado):mixed
        {
            return $this->dado;

        }//fim do get

        public function __set(string $vareavel, string $dado):void
        {
            $this->vareavel = $dado;

        }//fim do set

        public function imprimir():string 
        {
            return parent::imprimir().
                "<br>Salario: ".$this->salario;

        }
    }// fim da classe cliente



?>