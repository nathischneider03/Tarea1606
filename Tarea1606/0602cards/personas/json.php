<?php
require('../libs/conex.php');
require('../libs/ciudades.lib.php');
require('../libs/personas.lib.php');
header("Content-Type: application/json; charset=UTF-8");
$link=conectar();
if (!$_GET['id'])
{
$res=mostrarTodos($link);
} 
else 
{
$res=mostrarPorId($link,$_GET['id']);
}
$dbdata = array();
  while ( $row = $res->fetch_assoc())  {
	$dbdata[]=$row;
  }
 echo json_encode($dbdata);

?>