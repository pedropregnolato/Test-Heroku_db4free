<?php
    $mysql = mysqli_connect('db4free.net', 'pregnolato', 'ITEescobar123@', 'bd_escobar_ite')
        or die ("Falha ao conectar ao banco!");

        $sql = "
            SELECT * 
            FROM nome
        ";

        $recordSet = mysqli_query($mysql, $sql);

        $retorno = mysqli_fetch_all($recordSet);

        var_dump($retorno);
?>

<!-- link do projeto rodando no Heroku com um banco Online (db4free.net): http://tesi-escobar-ite.herokuapp.com/ -->