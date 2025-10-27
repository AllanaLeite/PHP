<?php
    namespace Projeto\telas;
    require_once("../php/cliente.php");
     require_once("../php/endereco.php");
     require_once("../DAO/conexao.php");
     require_once("../DAO/cadastrar.php");
     use Projeto\php\Cliente;
     use Projeto\php\Endereco;
     use Projeto\DAO\Conexao;
     use Projeto\DAO\Cadastrar;

     $conexao = new Conexao();
     $cadastrar = new Cadastrar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Cadastrar Cliente</title>
    </head>

    <body>
        <form class="form-control" method="POST">
            <h1>Cadastrar Cliente</h1>
            
            <div class ="row">
                    <div class="col">
                        <label for="lCpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="lCpf" name= "tCPF">
                    </div>

                    <div class="col">
                        <label for="lNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="lCpf" name= "tNome">
                    </div>

                    <div class="col">
                        <label for="lTelefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="lTelefone" name= "tTelefone">
                    </div>
            </div>

            
                    <div class="col">
                <label for="lRua" class="form-label">Rua:</label>
                        <input type="text" class="form-control" id="lRua" name= "tRua">
                    </div>

                    <div class="col">
                <label for="lNumero" class="form-label">Numero:</label>
                        <input type="number" class="form-control" id="lNumero" name= "tNumero">
                </div>

                <div class="col">
                <label for="lComplemento" class="form-label">Complemento:</label>
                        <input type="text" class="form-control" id="lComplemento" name= "tComplemento">
                </div>


                <div class="col">
                <label for="lCep" class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="lCep" name= "tCep">
                </div>

                <div class="col">
                <label for="lBairro" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" id="lBairro" name= "tBairro">
                </div>

                <div class="col">
                <label for="lCidade" class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="tCidade" name= "tCidade">
                </div>

                <div class="col">
                <label for="lEstado" class="form-label">Estado:</label>
                        <input type="text" class="form-control" id="lEstado" name= "tEstado">
                </div>

                <div class="col">
                <label for="lPais" class="form-label">Pais:</label>
                        <input type="text" class="form-control" id="lPais" name= "tPais">
                </div>

                <div class="col">
                <label for="lTotalCompras" class="form-label">Total de Compras:</label>
                        <input type="text" class="form-control" id="lTotalCompras" name= "tTotalCompras">
                </div>

                
                <div class="col">

                <button type="submit" class="btn btn-primary btn-sm">Cadastrar

                <?php
                    try{
                    $cpf = $_POST['tCPF'];
                    $nome = $_POST['tNome'];
                    $telefone = $_POST['tTelefone'];
                    $rua = $_POST['tRua'];
                    $numero = $_POST['tNumero'];
                    $complemento = $_POST['tComplemento'];
                    $cep = $_POST['tCep'];
                    $bairro = $_POST['tBairro'];
                    $cidade = $_POST['tCidade'];
                    $estado = $_POST['tEstado'];
                    $pais = $_POST['tPais'];
                    $totalCompras = $_POST['tTotalCompras'];

                    // criando objeto endereco

                    $cadastrar -> cadastrarEndereco ($conexao,$rua, $numero, $complemento, $bairro, $cep, $cidade, $estado, $pais);

                    //criando objeto pessoa

                    $cadastrar-> cadastrarCliente($conexao, $cpf, $nome, $telefone, $endereco, $totalCompras,1);
                    
                    }catch(Except $erro){
                        echo "Algo deu errado! <br><br>$erro";

                    }

                ?>


                </button>


                    <button type="button" class="btn btn-secondary btn-sm">Voltar</button>
                </div>
            

            
        </form>
    </body>










</html>