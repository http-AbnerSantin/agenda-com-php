<?php

    $host = "localhost";
    $user = "root";
    $pss = "";
    $db = "agenda";

    try {
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pss);

        //ativar modo de erros   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        //erro na conexão
        $error = $e->getMessage();
        echo "Erro:" . $erro;

    }

?>