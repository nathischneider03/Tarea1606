<?php
require_once('../libs/conex.php');
require_once('../libs/ciudades.lib.php');
$link=conectar();


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Ciudades</title>
          <link rel="stylesheet" href="/dw2_2022/node_modules/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
    
      <div class="container">



     <?php
      if (!($_POST) && !($_GET))
      {
        include('json.php');
      }
        elseif ($_GET['mod']=="new")
        {
          
        }
        elseif ($_GET['mod']=="edit")
        {
        if ($_GET['id'])
        {
          $res=mostrarCiudad($link,$_GET['id']);
          
        }
        }
        elseif ($_GET['mod']=="delete")
        {
            if ($_GET['id']) {
              borrarCiudad($link,$_GET);
              
            }

        }elseif ($_POST) {
          
          if ($_POST['id']==-1)
          {
            $salida= agregarCiudad($link,$_POST);
           
          }elseif ($_POST['id']!='') {
            $salida= editarCiudad($link,$_POST);
            
          }
        }

      ?>
      </div>

   </body>
 </html>
