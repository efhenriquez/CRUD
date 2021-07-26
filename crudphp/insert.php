<?php

include('conexion.php');
$con= conectar();

//1 para recibir los datos 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$id = $_POST['DNI'];
$correo = $_POST['correo'];

//2 consulta
$sql = 'INSERT INTO usuarios VALUES('$nombre', '$apellido', '$id', '$correo')';

//3 tomar la consulta y ejecutarla
$query = mysqli_query($con, $sql); 

//4 para redireccionar los datos
if($query){
    Header('Location: index.php')
}






?>