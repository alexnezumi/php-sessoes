<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>formulario</title>
</head>
<body>
  <h1>Formulario </h1>
  
  <form action="form2.php" method="POST" name="registrar">

    nome: <br>
        <input type="text" name="nome"> 
        <br>
    idade: <br>
        <input type="number" name="idade" > 
        <br>
    peso:  <br>
        <input type="number" name="peso" > 
        <br>
    altura: <br>
        <input type="number" name="altura" > 

    <br>
    <br>
        <input type="submit" name="enviar" value="enviar">

  </form>
</body>
</html>