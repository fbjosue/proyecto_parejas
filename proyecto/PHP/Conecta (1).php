
<?php

$Server = "localhost";
$user = "root";
$Password = "";
$Bd= "tENISS";
$Conection = mysqli_connect($server, $User, $Password, $Bd); 
if($conection->connect_errno){
die('Error al conectar la Base de Datos'.$Conection->connect_errno);



}
?>