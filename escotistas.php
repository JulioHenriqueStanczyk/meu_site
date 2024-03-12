


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="codex.css">
</head>
<body>
<?php 

if(isset($_POST['submit'])){

//print_r($_POST['registro']);
//print_r($_POST['nome']);
//print_r($_POST['tempo']);
//print_r($_POST['grupo']);
//print_r($_POST['tropa']);
//print_r($_POST['patrulha']);
//print_r($_POST['historia']);

include_once('escot.php');

$regitro = $_POST['registro'];
$nome = $_POST['nome'];
$tempo = $_POST['tempo'];
$grupo = $_POST['grupo'];
$tropa = $_POST['tropa'];
$patrulha = $_POST['patrulha'];
$historia = $_POST['historia'];

$result = mysqli_query($conexao, "INSERT INTO pessoas(regitro, nome, tempo, grupo, tropa, patrulha, historia)
 VALUES('$regitro', '$nome', '$tempo', '$grupo', '$tropa', '$patrulha', '$historia')");
}
?> 

    </div>
    <script type="text/javascript">
        var userip;
      </script>
  
      <script type="text/javascript" src="https://l2.io/ip.js?var=userip"></script>
  
      <script type="text/javascript">
        document.write("Seu IP e:", userip);
      </script>
      
</body>
</html>