<?php

$servidor="localhost";
$usuario="root";
$password="a";

//crear una variable para la conexion

$conn=mysqli_connect($servidor,$usuario,$password);

//verificar la conexion

if(!$conn)
{
    die("error al conectar con mysql".msqli_connect_error());
}
echo "conexion realizada exitosamente";  
  
?>
