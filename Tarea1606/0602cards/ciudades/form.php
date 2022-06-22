<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
<h3>Ciudad</h3>
<form class="" action="index.php" method="post">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
  <label for="ciudad">Ciudad</label><br>
  <input type="text" class="form-control"  name="ciudad" value="<?php if ($data['ciudad']){ echo $data['ciudad'];} ?>"><br>
  <button  class="btn">
    <img src="https://cdn-icons-png.flaticon.com/512/860/860825.png" width="50px"><a href="index.php"></a><br>Volver
</button>

 <button type="submit" class="btn">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFjBAV4re3gJjyiQJRaP-dbdKkZ8BZmELXXA&usqp=CAU" width="50px"><br>Enviar
</button>



</form>
