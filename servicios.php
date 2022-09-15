<?php include ("vista/cabecera.php") ?>



<?php 
session_start();

if($_POST){
    if(($_POST['nombre_usu'])&&($_POST['contraseña'])){
        $_SESSION['usuario']=$_POST['nombre_usu'];
        $_SESSION['nomUsuario']=$_POST['contraseña'];
    
    header('Location:admin/inicioadmin.php');
    }else{
        $mensaje="Error: Datos Incorrecto";
    }
}

?>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        
        <?php  if (isset($mensaje)) {?>
        <div class="alert alert-danger" role="alert">
          <?php  echo $mensaje?>
        </div> <?php } ?>
        <h4 class="modal-title w-100 font-weight-bold">Inciar Sesion</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="defaultForm-email" class="form-control" name="nombre_usu">
            <label for="defaultForm-email" >Usuario</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control" name="contraseña">
            <label for="defaultForm-pass">Contraseña</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Ingresar</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Servicios</h2>
        <ol>
          <li><a href="index.php">Incio</a></li>
          <li>Servicios</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  </main><!-- End #main -->


  <!-- ======= Services Section ======= -->
  
    <?php
    include("admin/config/conexion.php");
    $result = ("SELECT * FROM servicios");
    ?>
  <?php foreach($conn->query($result) as $list){ ?>
    <center><br>
  <div class="card" style="width:400px">
  <img class="card-img-top" src="img/<?php echo $list['foto']?>" alt="" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $list['nombre']?></h4>
      <a href="#" class="btn btn-primary">Ver mas <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
  <br></center>
  <?php }?>

<?php include ("vista/pie.php") ?>
