<?php
     namespace Projeto\DAO;
    class Conexao{
        function conectar()
        {
            try
            {
                $conn = mysqli_connect('localhost', 'root', '','lojaLana');
                if($conn)
                {
                    echo "<br>Conectado com sucesso!!";
                    return $conn;

                }
                echo "algo deu errado";
            }catch(Exception $erro){
                echo "Algo deu errado! <br><br>$erro";
            }


        }

    }

?>