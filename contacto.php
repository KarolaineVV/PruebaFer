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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contacto</h2>
        <ol>
          <li><a href="index.php">Incio</a></li>
          <li>Contacto</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Nuestra dirección</h3>
              <p>Av. 30 calle 10  Valledupar,   Colombia</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Envíanos un correo</h3>
              <p>FerrerMaxi@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Llámenos</h3>
              <p>+57 300 678 5429</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15696.707039746845!2d-73.24921557766822!3d10.407531881158736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8aba4f9667eab3%3A0x3dcb64778485bc54!2sSENA%20CBC%20(Centro%20Biotecnologico%20del%20Caribe)!5e0!3m2!1ses-419!2sco!4v1663020412469!5m2!1ses-419!2sco" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electrónico" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php   include ("vista/pie.php") ?>