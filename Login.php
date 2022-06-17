<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <style media="all" id="fa-v4-font-face">
        @font-face{font-family:"FontAwesome";font-display:block;src:url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot);src:url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot?#iefix) format("embedded-opentype"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff2) format("woff2"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff) format("woff"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.ttf) format("truetype"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.svg#fontawesome) format("svg")}@font-face{font-family:"FontAwesome";font-display:block;src:url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot);src:url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot?#iefix) format("embedded-opentype"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff2) format("woff2"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff) format("woff"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.ttf) format("truetype"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.svg#fontawesome) format("svg")}@font-face{font-family:"FontAwesome";font-display:block;src:url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot);src:url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot?#iefix) format("embedded-opentype"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff2) format("woff2"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff) format("woff"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.ttf) format("truetype"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.svg#fontawesome) format("svg");unicode-range:U+f004-f005,U+f007,U+f017,U+f022,U+f024,U+f02e,U+f03e,U+f044,U+f057-f059,U+f06e,U+f070,U+f075,U+f07b-f07c,U+f080,U+f086,U+f089,U+f094,U+f09d,U+f0a0,U+f0a4-f0a7,U+f0c5,U+f0c7-f0c8,U+f0e0,U+f0eb,U+f0f3,U+f0f8,U+f0fe,U+f111,U+f118-f11a,U+f11c,U+f133,U+f144,U+f146,U+f14a,U+f14d-f14e,U+f150-f152,U+f15b-f15c,U+f164-f165,U+f185-f186,U+f191-f192,U+f1ad,U+f1c1-f1c9,U+f1cd,U+f1d8,U+f1e3,U+f1ea,U+f1f6,U+f1f9,U+f20a,U+f247-f249,U+f24d,U+f254-f25b,U+f25d,U+f271-f274,U+f279,U+f28b,U+f28d,U+f2b5-f2b6,U+f2b9,U+f2bb,U+f2bd,U+f2c1-f2c2,U+f2d0,U+f2d2,U+f2dc,U+f2ed,U+f3a5,U+f3d1,U+f410}@font-face{font-family:"FontAwesome";font-display:block;src:url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.eot);src:url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.eot?#iefix) format("embedded-opentype"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.woff2) format("woff2"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.woff) format("woff"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.ttf) format("truetype"),url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.svg#fontawesome) format("svg");unicode-range:U+f003,U+f006,U+f014,U+f016,U+f01a-f01b,U+f01d,U+f040,U+f045-f047,U+f05c-f05d,U+f07d-f07e,U+f087-f088,U+f08a-f08b,U+f08e,U+f090,U+f096-f097,U+f0a2,U+f0e4-f0e6,U+f0ec-f0ee,U+f0f5-f0f7,U+f10c,U+f112,U+f114-f115,U+f11d,U+f123,U+f132,U+f145,U+f147-f149,U+f14c,U+f166,U+f16a,U+f172,U+f175-f178,U+f18e,U+f190,U+f196,U+f1b1,U+f1d9,U+f1db,U+f1f7,U+f20c,U+f219,U+f230,U+f24a,U+f250,U+f278,U+f27b,U+f283,U+f28c,U+f28e,U+f29b-f29c,U+f2b7,U+f2ba,U+f2bc,U+f2be,U+f2c0,U+f2c3,U+f2d3-f2d4}</style>
   
   <link rel="stylesheet" href="assets/css/StyleL.css">

   <link href="assets/img/mini.jpg" rel="icon">
   <link href="assets/img/mini.jpg" rel="apple-touch-icon">
   
   <title>Login TOMORROW BY TOGETHER | TXT</title>

</head>

  <body class="bg-dark">
    <section>
        <div class="row g-0">
           <!--Carrusel-->
            <div class="col-lg-7 d-none d-lg-block"> 
                <div id="carouselExampleCaptions" class="carousel slide pointer-event" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item img-1 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Reyes de la 4ta generación</h5>
                          <a class="text-muted text-decoration-none">Conoce mas acerca de ellos</a>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Feel like cinderella naega byeonhae</h5>
                          <a class="text-muted text-decoration-none">Visita nuestro sitio web</a>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
             <!--Carrusel-->

              <!--Formularios-->
            <div id="InicioLogin" class="col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100">
                    <img src="assets/img/Logo.png" class="img-fluid">
                </div>
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                <h1 class="font-weight-bold mb-4">BIENVENIDA MOA </h1>
                <div class="container">
                  
                  <!--Login-->
                  <form class="mb-5" action="IniciarSesion.php" method="post">
                    <div class="input-field mb-4">
                      <label class="form-label font-weight-bold">Email</label>
                          <input type="text" class="form-control bg-dark-x border-0" 
                           placeholder="Ingresa tu email" name="email" required >
                    </div>

                    <div class="input-field mb-4">
                      <label class="form-label font-weight-bold">Contraseña</label>
                          <input type="password" class="form-control bg-dark-x border-0 mb-2" 
                          placeholder="Ingresa tu contraseña" name="contraseña" required>

                          <a href="" class="form-text text-muted text-decoration-none row ">
                        ¿Has olvidado tu contraseña?</a>

                          <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Recuerdame</label>
                          </div>
                    </div>

                      <button type="submit" value="Iniciar Sesion" class="btn btn-primary w-100">Iniciar sesión</button>

                      <div class="login-signup text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                        <p class="d-inline-block mb-0">¿Eres nuevo?</p>
                        <a href="#Registro" class="text signup-link text-light font-weight-bold text-decoration-none ">Crea una cuenta ahora</a>
                      </div>
                      
                  </form>

                  <p class="font-weight-bold text-center text-muted">O inicia sesión con</p>
                  <div class="d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-light bg-dark flex-grow-1 mr-2" ><i class="fab fa-google lead mr-2" aria-hidden="true"></i> 
                      <a href="https://accounts.google.com/AddSession?hl=es-419&continue=https://www.google.com%3Fhl%3Des-419&ec=GAlA8wE">Google</a>
                    </button>
                    <button type="button" class="btn btn-outline-light bg-dark flex-grow-1 ml-2"><i class="fab fa-facebook-f lead mr-2" aria-hidden="true"></i> 
                      <a href="https://www.facebook.com/">Facebook</a>
                      </button>
                  </div>
                  <!--Login-->

                      <!-- Registration Form -->
                      <div class="form signup">
                        <form  id="Registro" class="mb-5" action="Registro.php" method="post">
                        <div class="input-field mb-4">
                      <label class="form-label font-weight-bold">Email</label>
                          <input type="text" class="form-control bg-dark-x border-0" 
                           placeholder="Ingresa tu email" name="emailRegistro" required >
                        </div>

                        <div class="input-field mb-4">
                      <label class="form-label font-weight-bold">Usuario</label>
                          <input type="text" class="form-control bg-dark-x border-0" 
                           placeholder="Ingresa tu usuario" name="usuarioRegistro" required >
                        </div>

                    <div class="input-field mb-4">
                      <label class="form-label font-weight-bold">Contraseña</label>
                          <input type="password" class="form-control bg-dark-x border-0 mb-2" 
                          placeholder="Ingresa tu contraseña" name="contraseñaRegistro" required>

                          <div class="input-field mb-4">
                      <label class="form-label font-weight-bold">Repite tu Contraseña</label>
                          <input type="password" class="form-control bg-dark-x border-0 mb-2" 
                          placeholder="Ingresa tu contraseña" name="contraseñaRRegistro" required>

                          <button type="submit" value="Registrar cuenta" class="btn btn-primary w-100">Registrar</button>
                        </form>

                        <div class="login-signup text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                          <p class="d-inline-block mb-0">¿Tienes Cuenta?</p>
                          <a href="#InicioLogin" class="text login-link text-light font-weight-bold text-decoration-none ">Inicia Sesion</a>
                        </div>
                      </div>
                </div>
                </div>
            </div>
    </section>
    <script src="assets/js/Login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  
</body>
</html>