<?php
$res=mostrarTodos($link);
 ?>
 <h3>Personas</h3><a href="index.php?mod=new" class="btn btn-success">Nuevo<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <rect x="4" y="4" width="16" height="16" rx="2"></rect>
   <line x1="9" y1="12" x2="15" y2="12"></line>
   <line x1="12" y1="9" x2="12" y2="15"></line>
</svg></a>

 <a href="json.php" target="new" class="btn btn-primary">JSON<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-braces" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M7 4a2 2 0 0 0 -2 2v3a2 3 0 0 1 -2 3a2 3 0 0 1 2 3v3a2 2 0 0 0 2 2"></path>
   <path d="M17 4a2 2 0 0 1 2 2v3a2 3 0 0 0 2 3a2 3 0 0 0 -2 3v3a2 2 0 0 1 -2 2"></path>
</svg></a>
<button type="button" class="btn btn-primary" onClick="window.location.reload();">Actualizar<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-rotate-clockwise" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M4.05 11a8 8 0 1 1 .5 4m-.5 5v-5h5"></path>
</svg></button>

     <?php
     while ($data=mysqli_fetch_array($res))
     {
       include 'card.vw.php';
     }
      ?>
