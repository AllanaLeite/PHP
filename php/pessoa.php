<?php
    namespace Projeto\php;
    require_once('endereco.php');// chamando o arquivo q vou utilizar
    use Projeto\php\Endereco;// Apontando para a classe

    class Pessoa{
        // definindo as vareaveis
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;
        
        //criar o construtor

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco)
        {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;

        }

          public function __get(string $dado):mixed
        {
            return $this->dado;

        }//fim do get

        public function __set(string $vareavel, string $Dado):void
        {
            $this->vareavel = $Dado;

        }//fim do set

        public function imprimir():string 
        {
            return "<br>CPF: ".$this->cpf.
                    "<br>Nome:".$this->nome.
                    "<br>Telefone: ".$this->telefone.
                    "<br>Endereco: ".$this->endereco->imprimir();
                   

        }// fim metado imprimir


    }//fim da classe














?>