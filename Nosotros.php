<?php include("vista/cabecera.php") ?>


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

        <h2>Sobre Nosotros</h2>
        <ol>
          <li><a href="index.php">Inicio</a></li>
          <li>Sobre Nosotros</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(assets/img/alt-services-2.jpg);"></div>

          <div class="col-lg-7">
            <h2>Expertos en brindar la mejor atencion y calidad a nuestros clientes</h2>
            <div class="our-story">
              <h4>Desde 2000</h4>
              <h3>Con Nosotros Encontraras</h3>
              <p>Encuentra la mejor oferta de productos de.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Tecnología, Electrodomésticos,</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Muebles, Decoración,</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Organización, Herramientas</span></li>
              </ul>
              <p> Construcción todo lo que buscas para tu hogar y proyectos de construcción lo encuentras.</p>

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nuestros Expertos</h2>
          <p>Conoce a nuestro grupo de expertos 100% capacitados para responder a todas tus inquietudes</p>
        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Walter White</h4>
              <span>Ingeniero</span>
              <p>Con una carrera de mas de 5 años en construccion</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sarah Jhonson</h4>
              <span>Arquitecta</span>
              <p>Con una carrera llena de pasion y amor por sus creaciones</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>William Anderson</h4>
              <span>Atencion al Cliente</span>
              <p>Con su gran fluidez y una gran capacidad de escucha</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Amanda Jepson</h4>
              <span>Arquitecta</span>
              <p>Gran trabajadora, eficaz en todos los sentidos</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Brian Doe</h4>
              <span>Marketing</span>
              <p>Si necesita ayuda en su negocio el es la mejor opcion</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Josepha Palas</h4>
              <span>Operaciones</span>
              <p>Encaragada de toda la logistica</p>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

  </main><!-- End #main -->

<?php include("vista/pie.php") ?>