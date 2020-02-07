<?php

  include ("Conexion.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_rol WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_fetch_array($result) == 1){
      $row=mysqli_fetch_array($result);
      $rol = $row['rol'];
    }
  }

  if(isset($_POST['Actualizar'])){
    $id = $_GET['id'];
    $rol = $_POST['rol'];

  }

?>
<?php include("includes/head.php") ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
          <form  action="Editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">

              <input type="text" nombre="rol" value="<?php echo $rol; ?>" class="form-control"  placeholder="Actualiza rol">

            </div>
            <button class="btn btn-success" type="submit" name="Actualizar">Actualizar</button>
          </form>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php") ?>
