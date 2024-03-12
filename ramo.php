<?php 
if(isset($_POST['submit'])){
    include_once('escot.php');

    $ramo = $_POST['ramo'];
    $historia = $_POST['historia'];
    $fundacao - $_POST['fundacao'];

    $result = mysqli_query($conexao, " INSERT INTO ramos(ramo, historia, fudaçao ) 
    values ( '$ramo', '$historia', '$fundacao )");



}
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="ramo.css">
</head>
<body>
   
<?php 
if(isset($_POST['submit'])){
    include_once('escot.php');

    $ramo = $_POST['ramo'];
    $historia = $_POST['historia'];
    $fundacao - $_POST['fundacao'];

    $result = mysqli_query($conexao, " INSERT INTO ramos(ramo, historia, fudaçao ) 
    values ( '$ramo', '$historia', '$fundacao )");



}
?>
    
    <script src="ramo.js"></script>
</body>
</html>