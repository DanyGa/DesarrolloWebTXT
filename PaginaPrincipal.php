<?php
//  session_start();
//  IF($_SESSION['email'] == null){
//    header("location:Login.php");
//   }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="assets/css/StyleP.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

    <link href="assets/img/mini.jpg" rel="icon">
    <link href="assets/img/mini.jpg" rel="apple-touch-icon">

    <title>TOMORROW x TOGETHER | TXT</title>
  </head>
  <body class="bg-dark">

    <!--Navbar-->
    <nav id="navbar-principal" class="navbar navbar-expand-lg navbar-light bg-transparent position-absolute w-100">
        <div class="container-fluid">
          <div class="left d-flex align-items-center">
            <a class="navbar-brand img" >
              <img src="assets/img/Logo.png" alt="">
            </a>
          </div>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars lead text-dark"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item d-flex">
                <a href="#SeccionAcercaGrupo" class="nav-link align-self-center text-light" aria-current="page" >Acerca del Grupo</a>
              </li>
              <li class="nav-item d-flex">
                <a class="nav-link align-self-center text-light" href="#SeccionTheStarSekeers">The Star Sekeers</a>
              </li>
              <li class="nav-item d-flex">
                <a class="nav-link align-self-center text-light" href="#SeccionIntegrantes">Integrantes</a>
              </li>
              <li class="nav-item d-flex">
                <a class="nav-link align-self-center text-light" href="#PaginasOficiales" aria-current="page">Paginas Oficiales</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle align-self-center text-light" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Mas</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Videos.php">TXT Original</a></li>
                  <li><a class="dropdown-item" href="Fanchant.php">Fanchant</a></li>
                  <li><a class="dropdown-item" href="Discografia.php">Discografia</a></li>
                </ul>
              </li>
              <li class="nav-item me-2">
                <a class="btn btn-dark" href="Modificar.php">Modificar Base de Datos</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!--Navbar-->

      <!--Comeback Seccion-->
      <section >
          <div class="row g-0 h-100">
            <div class="col-lg-6 d-flex">
                <div class="content mx-auto align-self-center px-4 my-5">
                    <small class="d-block text-primary mb-3"><span class="badge bg-primary me-2">Nuevo Comeback</span>
                    </small>
                    <h1 class="display-4 fw-bold mb-4 text-light">MINISODE 2: Thursday's Child<span class="text-primary">.</span></h1>
                    <p class="lead mb-4 text-light text-justify">Minisode 2: Thursday's Child es el cuarto EP en coreano del grupo TXT. 
                      Fue publicado el 9 de mayo de 2022, a través de Big Hit Music y Republic Records. Contiene cinco canciones, 
                      incluyendo el sencillo principal «Good Boy Gone Bad»</p>
                    <a href="Album/ThursdaysChildA.php" class="btn btn-primary mb-5">Ver mas acerca del Comeback</a>   
                </div>
            </div>           
              <div class="content mx-auto align-self-center px-10 my-11">
                <img src="assets/img/Principal/Minisode2.jpg" class="img-fluid">
              </div>
            </div>
          </div>
      </section>
      <!--Comeback Seccion-->

      <!--Grupo Seccion-->
      <section id="SeccionAcercaGrupo" class="d-flex py-6 h-100">
        <div class="container align-self-center">
          <div class="row">
            <div class="col-lg-6">
              <div class="content mx-auto px-100 my-110">
                <img src="assets/img/Principal/txtGroup.jpg" width="650" height="650" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6 d-flex">
              <div class="align-self-center my-5 px-4" data-bs-spy="scroll" data-bs-target="#navbar-principal" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h2 id="AcercadelGrupo" class="display-4 fw-bold mb-5 text-light text-center">Acerca del Grupo<span class="text-primary">.</span></h2>
                  
                <form id="frmDatos1" class="mb-5 text-justify">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-1">
                      <p class="lead fw-bold text-primary d-flex">▶</p>
                      <div class="ms-3">
                        <p class="lead fw-bold text-light">Nombre:</p>
                        <p class="text-light">TXT (TOMORROW X TOGETHER)</p>
                        </div>
                    </li>
                    <li class="d-flex mb-1">
                      <p class="lead fw-bold text-primary d-flex">▶</p>
                      <div class="ms-3">
                        <p class="lead fw-bold text-light">¿Por qué "TOMORROW X TOGETHER"?:</p> <p class="text-light">Los diferentes tú y yo juntos, con el mismo sueño de tener un futuro, 
                           lo que significa que se encontraron sin pistas y diferentes entre sí, 
                           pero tienen los mismos sueños y continúan alcanzándolo juntos.</p>
                      </div>
                    </li>
                    <li class="d-flex mb-1">
                      <p class="lead fw-bold text-primary d-flex">▶</p>
                      <div class="ms-3">
                        <p class="lead fw-bold text-light">Origen:</p>
                        <p class="text-light">Corea del Sur.</p>
                      </div>
                    </li>
                    <li class="d-flex mb-1">
                      <p class="lead fw-bold text-primary d-flex">▶</p>
                      <div class="ms-3">
                        <p class="lead fw-bold text-light">Número de integrantes:</p>
                        <p class="text-light">5 chicos (4 coreanos y 1 estadounidense)</p>
                      </div>
                    </li>
                  </ul>
                      <li class="d-flex mb-1">
                        <p class="lead fw-bold text-primary d-flex">▶</p>
                        <div class="ms-3">
                          <p class="lead fw-bold text-light">Lema:</p>
                          <p class="text-light">"One Dream! Hello, we are TOMORROW X TOGETHER!" 
                            (¡Un sueño! Hola, somos ¡TOMORROW X TOGETHER!).</p>
                        </div>
                      </li>
                    </ul>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Grupo Seccion-->

      <!--To Do Anuncio-->
      <section class="d-flex py-6">
        <div class="container align-self-center">
          <div class="bg-light call-to-action">
            <div class="row">
              <div class="col-lg-5 d-flex">
                <div class="align-self-center p-5">
                  <h2 class="display-4 fw-bold mb-4">TO DO x TXT<span class="text-primary">.</span></h2>
                  <p class="lead mb-4 text-justify">TO DO es un programa de variedad protagonizado por los 5 miembros de la Boy Band Tomorrow x Together. 
                    En este programa podemos ver a TXT haciendo actividades, retos y mucho mas.</p>
                  <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX2vpHvmxzoSiffZh5Xw3TGe" class="btn btn-primary">Ver lista de episodios de TO DO</a>
                </div>
              </div>
              <div class="col-lg-7 d-flex">
                <div class="align-self-center text-center mx-auto ">
                  <iframe width="600" height="340" src="https://www.youtube.com/embed/WxRKNuXyLQY" title="YouTube video player" frameborder="0"
                   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--To Do Anuncio-->

      <!--The Star Seekers-->
      <section id="SeccionTheStarSekeers" class="d-flex py-6">
        <div class="container align-self-center">
          <h2 class="display-4 fw-bold text-light text-center">The Star Sekeers<span class="text-primary">.</span></h2>
          <div class="row gx-2">
            <div class="col-lg-3 py-4">
              <a href="https://www.wattpad.com/story/294966013-the-star-seekers?utm_source=android&utm_medium=link&utm_content=story_info&wp_page=story_details_button&wp_uname=j_mxnho&wp_originator=KqQ+9ixGtNri9R4KODCEOtbvwq5ybB6zIqzf3Cbp+sPCV+uc3oxIzw3WhCupUVU0Dcy7j1tqMZ8vxYw9RVwLgCDyeEQ6rEAJT1SiHyHnZ2o8vFX2Xyt5dkI2l8EfRWRj" 
              class="text-decoration-none">
                <img src="assets/img/Principal/Wattpad.jpeg" width="250" height="250" class="img-fluid mb-4 ">
                <p class="lead text-light fw-bold mb-4">Wattpad</p>
                <p class="text-primary fw-bold" h>Ir a la Pagina <i class="fas fa-arrow-right ms-2"></i></p>
              </a>
            </div>
            <div class="col-lg-3 py-4">
              <a href="https://www.webtoons.com/en/fantasy/the-star-seekers/list?title_no=3786" class="text-decoration-none">
                <img src="assets/img/Principal/Webtoon.jpg" width="300" height="300" class="img-fluid mb-4">
                <p class="lead text-light fw-bold mb-4">Webtoon</p>
                <p class="text-primary fw-bold">Ir a la Pagina <i class="fas fa-arrow-right ms-2"></i></p>
              </a>
            </div>
            <div class="col-lg-6 d-flex">
              <p class="lead mb-4 align-self-center text-light text-justify">Cuando el símbolo del dragón vuelva a aparecer, cinco chicos darán un paso al frente para impedir el apocalipsis 
                y devolver la paz al mundo. Se los conoce como “los buscadores de estrellas”. La era de la magia. Un mundo donde los ídolos mágicos prevalecen. 
                 Un día, la magia le llega a un grupo de ídolos sin poderes, Star One. Pero un misterioso enemigo, el Culto de Matadragones, también los visita. 
                 De un día para el otro, Star One pasa de ser un grupo de ídolos desconocido a “los chicos destinados a salvar al mundo”. 
                 ¿Lograrán asumir esta gran responsabilidad y cambiar su destino? “Contigo, podemos lograr lo que sea”. 
                 Una historia de cinco chicos que descubren su potencial en su paso a la adultez.</p>
            </div>
          </div>
        </div>
      </section>
      <!--The Star Seekers-->

      <!--Integrantes Seccion-->
      <section id="SeccionIntegrantes" class="d-flex py-6 h-100">
            <div class="container align-self-center">
          <h2 class="display-4 fw-bold text-light text-center">Integrantes<span class="text-primary">.</span></h2>
                <ul class="statistics">
									<li>
                  <img src="assets/img/Principal/Soobin.png" class="img-fluid mb-3 ">
										 <h4 class="lead text-light fw-bold mb-3">Choi Soobin</h4>
                       <p class="text-primary fw-bold">Líder, Vocalista, Rapero y Bailarín</p>
									</li>
									<li>
                  <img src="assets/img/Principal/Yeonjun.png" class="img-fluid mb-3 ">
										<h4 class="lead text-light fw-bold mb-3">Choi Yeonjun</h4>
                       <p class="text-primary fw-bold">Rapero, Vocalista y Bailarín</p>
									</li>
									<li>
                  <img src="assets/img/Principal/Beomgyu.png" class="img-fluid mb-3">
										<h4 class="lead text-light fw-bold mb-3">Choi Beomgyu</h4>
                       <p class="text-primary fw-bold">Vocalista, Rapero y Bailarín</p>
									</li>
									<li>
                  <img src="assets/img/Principal/Taehyun.png" class="img-fluid mb-3">
										<h4 class="lead text-light fw-bold mb-3">Kang Taehyun</h4>
                       <p class="text-primary fw-bold">Vocalista, Rapero y Bailarín</p>
									</li>
									<li>
                  <img src="assets/img/Principal/Hueningkai.png" class="img-fluid mb-3">
										<h4 class="lead text-light fw-bold mb-3">Huening Kai</h4>
                       <p class="text-primary fw-bold">Vocalista, Rapero, Bailarín y Maknae</p>
									</li>
								</ul>
            </div>
      </section>
      <!--Integrantes Seccion-->

      <!--Contenido Seccion-->
      <section class="d-flex py-6">
        <div class="container align-self-center">
          <h2 class="display-4 fw-bold text-light">Mas Contenido<span class="text-primary">.</span></h2>
          <div class="row gx-5">
            <div class="col-lg-5 py-5">
              <a href="Fanchant.php" class="text-decoration-none">
                <img src="assets/img/Principal/Fanchant.jpg" class="img-fluid mb-4">
                <p class="lead text-light fw-bold mb-4">Fanchant</p>
                <p class="text-primary fw-bold">Ver más <i class="fas fa-arrow-right ms-2"></i></p>
              </a>
            </div>
            <div class="col-lg-4 py-5">
              <a href="Discografia.php" class="text-decoration-none">
                <img src="assets/img/Principal/Discography.png"  class="img-fluid mb-2">
                <p class="lead text-light fw-bold mb-4">Discografia</p>
                <p class="text-primary fw-bold">Ver más <i class="fas fa-arrow-right ms-2"></i></p>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!--Contenido Seccion-->

      <!--Oficial Seccion-->
      <section class="d-flex h-100">
        <div class="container align-self-center">
          <div id="PaginasOficiales" class="bg-primary text-light text-center p-5 rounded w-75 mx-auto mb-5">
            <h2 class="display-4 fw-bold">Paginas Oficiales</h2>
            <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://ibighit.com/txt/eng/" class="lead text-light"><i class="fa fa-smile-o"></i></a></li>
                    <li class="list-inline-item"><a href="https://txt-official.jp/index.php" class="lead text-light"><i class="fa fa-star-o"></i></a></li>
                    <li class="list-inline-item me-3"><a href="https://www.facebook.com/TXT.bighit/" class="lead text-light"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item me-3"><a href="https://www.instagram.com/txt_bighit/" class="lead text-light"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.youtube.com/txt_bighit" class="lead text-light"><i class="fa fa-youtube-play"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.vlive.tv/channel/BA18A3" class="lead text-light"><i class="fa fa-angellist"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/TXT_members" class="lead text-light"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://open.spotify.com/artist/0ghlgldX5Dd6720Q3qFyQB" class="lead text-light"><i class="fa fa-spotify"></i></a></li>
                  </ul>
                  <audio id="song" controls preload autoplay>
                <source src="assets/media/Good Boy Gone Bad.mp3" type="audio/mp3">
                    Tu navegador no soporta audio HTML5.
              </audio>
              <script src="js/jquery-3.4.1.min.js">
               $ (document).ready(function () {
              var audi = document.getElementById("song");
              audi.play();}
              );
              </script>
          </div>

          <!-- footer  -->
          <div class="border-top py-4">
            <div class="row">
              <div class="col-lg-10 col-md-12 text-light">
                <small>2022. Tomorrow x Together Fanpage. Todos los derechos reservados.</small>
                <small> HYBE x Big Hit Entertainment</small>
              </div>
            </div>
          </div>
          <!-- footer  -->
      </section>
      <!--Oficial Seccion-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>

  </body>
</html>