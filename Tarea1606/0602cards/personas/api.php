<?php
require('../libs/conex.php');
require('../libs/ciudades.lib.php');
require('../libs/personas.lib.php');
$link=conectar();


 ?>
<?php
if (!($_POST) && !($_GET))
{
  include('json.php');
}
  elseif ($_GET['mod']=="new")
  {
    $ciudades=mostrarCiudades($link);
  }
  elseif ($_GET['mod']=="edit")
  {
  if ($_GET['id'])
  {

    include('json.php?id'.$_GET['id']);
  }
  }
  elseif ($_GET['mod']=="delete")
  {
      if ($_GET['id']) {
        borrarPersona($link,$_GET);
        
      }

  }elseif ($_POST) {
    
    print_r($_POST);
    if ($_POST['id']==-1)
    {
      $salida= agregarPersona($link,$_POST);
      
    } elseif ($_POST['id']!='') {
      $salida= editarPersona($link,$_POST);
    }
  }
?>