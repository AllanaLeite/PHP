<?php
    namespace Projeto\DAO;

    require_once('conexao.php');
    use Projeto\DAO\Conexao;

    class Cadastrar{
        public function cadastrarEndereco(Conexao $conexao, string $logradouro, int $numero, string $complemento, string $bairro, string $cep, string $cidade, string $estado, string $pais)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "insert into endereco(codigo, logradouro, numero, complemento, bairro, cep, cidade, estado, pais) 
                values ('', '$logradouro', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$estado', '$pais')";
                $result = mysqli_quey($conn, $sql);

                mysqli_close($conn);
                if ($result)
                {
                    echo "<br>Inserido com sucesso!";


                }

                return "<br><br>Não inserido";

            }catch(Exception $erro){
                return "<br><br>Algo deu errado <br><br>$erro";

            }
        

        }

        public function cadastrarCliente(Conexao $conexao, int $cpf, string $nome, string $telefone, float $totalCompras, int $codigoEndereco)
        {
            try{
                $conn = $conexao-> conectar();
                $sql = "insert into cliente(codigo, cpf, nome, telefone, totalCompras, codigoEndereco)
                values ('', '$cpf', '$nome', '$telefone', '$totalCompras', '$codigoEndereco')";
                
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);

            }catch(Exception $erro){
                return "<br><br>Algo deu errado <br><br> $erro";


            }

        }

    }
?>