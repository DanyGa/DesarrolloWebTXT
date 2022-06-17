
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/Landing.css">
    <link rel="stylesheet" href="assets/css/Responsive.css">

    <link href="assets/img/mini.jpg" rel="icon">
    <link href="assets/img/mini.jpg" rel="apple-touch-icon">

    <title>VIDEOS | TOMORROW X TOGETHER | TXT</title>
  </head>
  <body>
    
    <div style="position: relative;">
    <!-- header -->
    <nav class="navbar navbar-expand-lg netflix-navbar netflix-padding-left netflix-padding-right">
      <div class="container-fluid">
        <div class="netflix-row">
          <div class="left d-flex align-items-center">
            <a class="navbar-brand img " href="PaginaPrincipal.php">
              <img src="assets/img/Logo.png" >
            </a>
            <div class="netflix-dropdown-box dropdown">
              <button class="netflix-dropdown dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Mas Opciones
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="PaginaPrincipal.php">Inicio</a></li>
                <li><a class="dropdown-item" href="Discografia.php">Discografia</a></li>
                <li><a class="dropdown-item" href="Fanchant.php">Fanchant</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- /header -->


    <!-- video -->
    <div class="">
      <section class="netflix-home-video">
         <div class="top"></div>
         <div class="bottom"></div>
         <video src="assets/media/Good Boy Gone Bad Official Teaser.mp4" autoplay loop muted></video>
         <div class="content">
             <section class="left">
                 <img src="assets/img/LogoN.png" width="350">
             
                 <div class="d-flex mt-2">
                   <button class="btn btn-light m-2" > <i class="bi bi-play-fill" style="color: black; padding: 0%;"></i>
                   <a href="https://www.youtube.com/watch?v=Os_6c5j6YiQ">Play Now</a></button>
                   <button class="btn btn-secondary m-2"><i class="bi bi-info-circle" style=" padding: 0%;"></i>
                   <a href="Discografia.php">Mas Info.</a></button>
                 </div>
             </section>           
         </div>
       </section>     
   </div>
    <!-- video -->

      <!-- sliders -->
      <div class="slider-box">

         <!-- slider TXT Original -->
        <div class="container-fluid slider">
          <section class="d-flex justify-content-between ">
            <p class="text-white m-4"> <b>TXT Original</b> </p>
            <div class="">
              <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active tab-change-btn" aria-current="true" aria-label="Slide 1"></button>
              <button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
          </section>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="position: relative; overflow: visible;">
              <div class="carousel-item active">
                <section class="d-flex" >
                  <div class="card" >
                    <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX2t6dT6PsSLo1j0Xbv7UBbd">
                    <img src="assets/img/Video/Choreography.jpg" class="card-img-top" >
                    </a>
                  </div>

                  <div class="card">
                  <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX30hWu7M8uDNa9wRc_W9nIW">
                    <img src="assets/img/Video/DreamWeek.jpg" class="card-img-top">
                    </a>
                  </div>

                  <div class="card">
                  <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX3jYLc6AQ347BLLAJLgX_Gx">
                    <img src="assets/img/Video/MoodDiary.jpg" class="card-img-top">
                    </a>
                  </div>

                  <div class="card" >
                    <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX10oqupDE8cVYKFmZIHY-eT">
                    <img src="assets/img/Video/OneDream.jpg" class="card-img-top">
                    </a>
                  </div>

                  <div class="card" >
                  <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX1dffyKtyNYpWWl40COUDz2">
                    <img src="assets/img/Video/TalkxToday.jpg" class="card-img-top">
                    </a>
                  </div>

                  <div class="card" >
                  <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX2vpHvmxzoSiffZh5Xw3TGe">
                    <img src="assets/img/Video/ToDo.jpg" class="card-img-top">
                    </a>
                  </div>

                </section>
              </div>
              <div class="carousel-item">
                <section class="d-flex">
                  <div class="card">
                  <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX0RORkGKfyt4PHeye2L0b1v">
                    <img src="assets/img/Video/TTerview.jpg" class="card-img-top">
                    </a>
                  </div>

                  <div class="card" >
                  <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX2L0AN696uMAHUctoCsSmPx">
                    <img src="assets/img/Video/TXTEpisode.jpg" class="card-img-top">
                    </a>
                  </div>

                  <div class="card">
                  <a href="https://www.youtube.com/playlist?list=PLcZxoPUYVQX2NWf-amjl7XHxxFXMDJWTu">
                    <img src="assets/img/Video/XTime.jpg" class="card-img-top">
                    </a>
                  </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <!-- slider TXT Original -->

        <!-- slider Shows y Performances -->
        <div class="container-fluid  slide2">
          <section class="d-flex justify-content-between margin-right margin-title2">
            <p class="text-white"> <b>Shows y Performances</b> </p>
            <div class="">
              <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active tab-change-btn" aria-current="true" aria-label="Slide 1"></button>
              <button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
          </section>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="position: relative; overflow: visible;">
              <div class="carousel-item active">
                <section class="d-flex " >
                  <div class="card" >
                  <a href="https://www.youtube.com/watch?v=Ehin3aFK1Tw">
                    <img src="assets/img/Video/DebutShow.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/watch?v=XUp3rJMPQqU&ab_channel=M2">
                  <div class="card">
                    <img src="assets/img/Video/MagicComebackShow.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/watch?v=Fsrmz1GKY6E&ab_channel=M2">
                  <div class="card">
                    <img src="assets/img/Video/EternityComebackShow.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/watch?v=rywI0H1cqjA">
                  <div class="card" >
                    <img src="assets/img/Video/BlueHourComebackShow.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/watch?v=RhyX6ejWtVE&ab_channel=M2">
                  <div class="card" >
                    <img src="assets/img/Video/FreezeComebackShow.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/watch?v=5aGlJmrBNuw">
                  <div class="card" >
                    <img src="assets/img/Video/ThursdaysChildComebackShow.jpg" class="card-img-top">
                    </a>
                  </div>
                </section>
              </div>

              <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhbx22iq5rJdNp0vzyA4Fnlp">
              <div class="carousel-item">
                <section class="d-flex">
                  <div class="card">
                    <img src="assets/img/Video/Performance1.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhaWVbluaZIxmGbU93Ib68td">
                  <div class="card" >
                    <img src="assets/img/Video/Performance2.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhZf__FaxHwE1TLudpajHCCg">
                  <div class="card">
                    <img src="assets/img/Video/Performance3.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhYHH-2KkVmNaRjyT3g_jN4V">
                  <div class="card" >
                    <img src="assets/img/Video/Performance4.jpg" class="card-img-top">
                    </a>
                  </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <!-- slider Shows y Performances -->

        <!-- slider TV Show y Mas -->
        <div class="container-fluid  slide3">
          <section class="d-flex justify-content-between margin-right margin-title">
            <p class="text-white"> <b>TV Show y Mas</b> </p>
            <div class="">
              <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active tab-change-btn" aria-current="true" aria-label="Slide 1"></button>
              <button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
          </section>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="position: relative; overflow: visible;">
              <div class="carousel-item active">
                <section class="d-flex" >
                  <div class="card" >
                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhbEGdKM3oCAaqT_hcx5fuBo">
                    <img src="assets/img/Video/ASC.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhbcCfplQGHVtvIPLWQ7qiUD">
                  <div class="card">
                    <img src="assets/img/Video/BanBan.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhbDQ9N0HnyP7iLlkcakLDPm">
                  <div class="card">
                    <img src="assets/img/Video/CoolRadio.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/watch?v=OE8h-ZkvIJ0&ab_channel=HYBELABELS">
                  <div class="card" >
                    <img src="assets/img/Video/Documentary.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhaZFco8pr04aBHYFu5J7r23">
                  <div class="card" >
                    <img src="assets/img/Video/FandomTour.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/watch?v=2ZabLWRVMyI">
                  <div class="card" >
                    <img src="assets/img/Video/IdolHouse.jpg" class="card-img-top">
                    </a>
                  </div>
                </section>
              </div>

              <a href="https://ok.ru/video/3364052011537">
              <div class="carousel-item">
                <section class="d-flex ">
                  <div class="card">
                    <img src="assets/img/Video/IdolWonderland.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/watch?v=8NptiH-EHp8&ab_channel=%EB%AA%A8%EB%B9%84%EB%94%95Mobidic">
                  <div class="card" >
                    <img src="assets/img/Video/Jessie.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhYYVr_xj_lpQHXXZhjMiUcq">
                  <div class="card">
                    <img src="assets/img/Video/KbobStar.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PL_Cqw69_m_ywOmrYe79Ancn6w9tVJ2Zex">
                  <div class="card" >
                    <img src="assets/img/Video/Playground.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhagIXf0TsLeJq0lmmgoOnLj">
                  <div class="card" >
                    <img src="assets/img/Video/PowerRadio.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhYgE912InuTunM4RUa7Tw6m">
                  <div class="card" >
                    <img src="assets/img/Video/RadioListen.jpg" class="card-img-top">
                    </a>
                  </div>
                </section>
              </div>

              <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhYe6XKE2-RNUjVhE_1qgJ5h">
              <div class="carousel-item">
                <section class="d-flex ">
                  <div class="card" >
                    <img src="assets/img/Video/SecretFriend.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhaMv9wHN5tbueW02DreEFLz">
                  <div class="card" >
                    <img src="assets/img/Video/WeeklyIdol.jpg" class="card-img-top">
                    </a>
                  </div>

                  <a href="https://www.youtube.com/playlist?list=PLI41iQU0lqhZp_VmVaJDJEId4y94VfGRp">
                  <div class="card" >
                    <img src="assets/img/Video/WeKpop.jpg" class="card-img-top">
                    </a>
                  </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      <!-- slider TV Show y Mas -->


      <!-- footer  -->
      <div class="container footer">
            <div class="col">
                <p class="copy-right text-center">2022. Tomorrow x Together Fanpage. Todos los derechos reservados. HYBE x Big Hit Entertainment</p>
            </div>   
      </div>
      <!-- footer  -->

    </div>

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/Videos.js"></script>
  </body>
</html>