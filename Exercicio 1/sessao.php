
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessao</title>

<?php
session_start();

$_SESSION["nome2"] = $_POST["nome2"];
$_SESSION["idade2"] = $_POST["idade2"];
$_SESSION["peso2"] = $_POST["peso2"];
$_SESSION["altura2"] = $_POST["altura2"];

if ($_SESSION["altura"] > $_SESSION["altura2"]){

    $pessoaalta = $_SESSION["nome"];
}else{
    $pessoaalta = $_SESSION["nome2"];}

if ($_SESSION["idade"] > $_SESSION["idade2"]){
    
    $pessoavelha = $_SESSION["nome"];
}else{
    $pessoavelha = $_SESSION["nome2"];}

if ($_SESSION["peso"] > $_SESSION["peso2"]){
    
    $maispesado = $_SESSION["nome"];
}else{
    $maispesado = $_SESSION["nome2"];}

?>

</head>
<body>

    <b>pessoa mais alta: <b> <?php echo $pessoaalta ?></br>

    <b>pessoa mais velha: <b> <?php echo $pessoavelha ?></br>

    <b>pessoa com mais peso: <b> <?php echo $maispesado?></br>



   


</body>
</html>