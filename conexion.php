<?php
$host 	= 'sql308.infinityfree.com';
$nom 	= 'epiz_34322014';
$pass 	= 'bQEXDye3qM';
$db 	= 'epiz_34322014_hotelclean';

$conn = mysqli_connect($host, $nom, $pass, $db);

if (!$conn) 
{
  die("Error en la conexión: " . mysqli_connect_error());
}	
?>