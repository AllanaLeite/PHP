<?php
    namespace Projeto\php;
    require_once("pessoa.php");
    require_once("endereco.php");
    use Projeto\php\Pessoa;
    use Projeto\php\Endereco;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Bem Vindo !</h1>
    <br><br>
    <form method="POST">
        <label>CPF: </label>
        <input type="text" id="tCpf" name="tCPF"/><br>

        <label>Nome: </label>
        <input type="text" id="tNome" name="tNome"/><br>

        <label>Telefone: </label>
        <input type="text" id="tTelefone" name="tTelefone"/><br>

        <label>Rua: </label>
        <input type="text" id="tRua" name="tRua"/><br>

        <label>Numero: </label>
        <input type="number" id="tNumero" name="tNumero"/><br>

        <label>Complemento: </label>
        <input type="text" id="tComplemento" name="tComplemento"/><br>

        <label>CEP: </label>
        <input type="text" id="tCep" name="tCEP"/><br>

        <label>Bairro: </label>
        <input type="text" id="tBairro" name="tBairro"/><br>

        <label>Cidade: </label>
        <input type="text" id="tCidade" name="tCidade"/><br>

        <label>Estado: </label>
        <input type="text" id="tEstado" name="tEstado"/><br>

        <label>Pais: </label>
        <input type="text" id="tPais" name="tPais"/><br>


        <button>Cadastrar
            <?php
                $cpf = $_POST['tCPF'];
                $nome = $_POST['tNome'];
                $telefone = $_POST['tTelefone'];
                $rua = $_POST['tRua'];
                $numero = $_POST['tNumero'];
                $complemento = $_POST['tComplemento'];
                $cep = $_POST['tCEP'];
                $bairro = $_POST['tBairro'];
                $cidade = $_POST['tCidade'];
                $estado = $_POST['tEstado'];
                $pais = $_POST['tPais'];

                // criando objeto endereco

                $endereco = new endereco(1,$rua, $numero, $complemento, $bairro, $cep, $cidade, $estado, $pais);

                //criando objeto pessoa

                 $pessoa = new pessoa($cpf, $nome, $telefone, $endereco);
                 echo $pessoa->imprimir();

                 
            ?>
        </button>




    </form>


</body>
</html>