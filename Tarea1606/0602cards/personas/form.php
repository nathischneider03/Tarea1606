<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
<h3>Personas</h3>
<form class="" action="index.php" method="post">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>

  <label for="cin">Cin</label><br>
  <input type="text" class="form-control"  name="cin" value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>

  <label for="apellido">Apellido</label><br>
  <input type="text" class="form-control"  name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>

  <label for="nombre">Nombre</label><br>
  <input type="text" class="form-control"  name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>

  <label for="fenac">F. Nacimiento</label><br>
  <input type="text" class="form-control"  name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>

  <label for="email">Email</label><br>
  <input type="text" class="form-control"  name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>

  <label for="ciudad_id">Ciudad</label><br>

  <select class="form-select"  name="ciudad_id" class="form-control" >
    <?php
    while ($d=mysqli_fetch_array($ciudades))
    {
      $sel='';
      if (($d['id']==$data['ciudad_id']) )
        { $sel="selected='true'";}
      echo "<option  value='".$d['id']."'".$sel.">".$d['ciudad']."</option>";
    }
     ?>
  </select>
  <button type="submit" class="btn">
 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFjBAV4re3gJjyiQJRaP-dbdKkZ8BZmELXXA&usqp=CAU" width="50px"><br>Enviar
 </button>

  <button  class="btn">
  <img src="https://cdn-icons-png.flaticon.com/512/860/860825.png" width="50px"><a href="index.php"></a><br>Volver
  </button>
</form>
