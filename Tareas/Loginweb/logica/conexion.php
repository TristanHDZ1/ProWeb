<?php

$host_db = "127.0.0.1:3306";
$user_db = "root";
$pass_db = "75891100";
$db_name = "test_php";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>