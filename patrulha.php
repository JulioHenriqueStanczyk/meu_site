




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="patrulha.css">
</head>
<body>

<?php 
if(isset($_POST['submit'])){
    include_once('escot.php');

    $ramo = $_POST['ramo'];
    $tropa = $_POST['tropa'];
    $nome = $_POST['nome'];
    $historia = $_POST['historia'];

    $result = mysqli_query($conexao, "INSERT INTO patrulha(ramo, tropa, nome, historia) 
    value('$ramo', '$tropa', '$nome', '$historia')");
    
}
?>

    
    <script src="patrulha.js"></script>
</body>
</html>