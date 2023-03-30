<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>CONSULTÓRIO MÉDICO</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">Cadastro</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
  data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
  aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      <a class="nav-link" href="?page=novo">Cadastrar funcionário</a>
      <a class="nav-link" href="?page=consultar">Consultar equipamentos</a>
      <a class="nav-link" href="?page=listar">Listar equipamentos</a>
  </div>
  </div>
  </div>
</nav>

<div class="container">
  <div class="row">
  <div class="col mt-5">

<?php

   include("config.php");
   switch(@$_REQUEST["page"]){
    case "novo":
        include("novo-funcionário.php");
        break;
        
    case "listar":
        include("listar-equipamento.php");
        break;
    
    case "salvar":
        include("salvar-equipamento.php");
        break;

    case "editar":
        include("editar-equipamento.php");
        break;
    
    case "consultar":
        include("consultar-equipamento.php");
        break;
    default:
    print "<h2>Bem-vindo!</h2>";
}


?>
</div>
</div>
</div>



<script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>