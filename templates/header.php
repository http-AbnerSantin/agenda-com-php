<?php
  include_once("config/url.php");
  include_once("config/process.php");

  //limpa a mensagem
  if(isset($_SESSION["msg"])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION["msg"] = "";
  }
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<!--FONTAWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<!--CSS-->
  <link rel="stylesheet" href="<?php $BASE_URL?>css/style.css">


<title>Agenda de contatos</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
            <a class="navbar-brand" href="<?php $BASE_URL?>index.php">Agenda PHP</a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link active" id="home-link" href="<?php $BASE_URL?>index.php">Agenda</a>
                    <a class="nav-link active" href="<?php $BASE_URL?>create.php">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>