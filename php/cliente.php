<?php
    namespace Projeto\php;
    require_once('pessoa.php');
    use Projeto\php\Pessoa;

    class Cliente extends Pessoa{
        protected float $totalCompras;

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, float $totalCompras)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->totalCompras = $totalCompras;

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
                "<br>Total de Compras: ".$this->totalCompras;

        }
    }// fim da classe cliente



?>