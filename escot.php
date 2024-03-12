<?php 
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'tata';

$conexao = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

if($conexao ->connect_errno){
    echo 'erro';
}else{
    echo 'exito na conexao';
}

?>
