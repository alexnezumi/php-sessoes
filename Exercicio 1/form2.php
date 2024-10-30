<?php
session_start(); 

$_SESSION["nome"] = $_POST["nome"];
$_SESSION["idade"] = $_POST["idade"];
$_SESSION["peso"] = $_POST["peso"];
$_SESSION["altura"] = $_POST["altura"];

?>

<!DOCTYPE html>
<html>
<head>
   <title>formulario</title>
</head>
<body>
  <h1>Formulario </h1>
  
  <form action="sessao.php" method="POST" name="registrar">
 
    nome: <br>
        <input type="text" name="nome2"> 
        <br>
    idade: <br>
        <input type="number" name="idade2" > 
        <br>
    peso:  <br>
        <input type="number" name="peso2" > 
        <br>
    altura: <br>
        <input type="number" name="altura2" > 
    <br>
    <br>
        <input type="submit" name="enviar" value="enviar">

  </form>
</body>
</html>
