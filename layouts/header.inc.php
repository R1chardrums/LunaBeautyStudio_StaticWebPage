<?php 
  $url= $_SERVER["REQUEST_URI"];
  $es_en = explode("_", $url);
  $detect_page = explode("/", $url);

  $change_idiom=0;
  for ($i=0; $i < count($es_en) ; $i++) { 
    if ($es_en[$i]==="es.php") {
      $change_idiom=$change_idiom+1;
    }
  }

  $includ_index=0;
  for ($i=0; $i < count($detect_page) ; $i++) { 
    if ($detect_page[$i] != "index.php" &&
        $detect_page[$i] != "index_es.php" &&

        $detect_page[$i] != "about.php" &&
        $detect_page[$i] != "about_es.php" &&

        $detect_page[$i] != "services.php" &&
        $detect_page[$i] != "services_es.php" &&

        $detect_page[$i] != "gallery.php" &&
        $detect_page[$i] != "gallery_es.php" &&

        $detect_page[$i] != "contact.php" &&
        $detect_page[$i] != "contact_es.php" &&

        $detect_page[$i] != "care_faq.php" &&
        $detect_page[$i] != "care_faq_es.php")
    {
      $includ_index=$includ_index;
    }else{
      $includ_index=$includ_index+1;
    }
  }
?>

  <div class="float-buttons">
    <div class="c-float">
      <a class="social-float ws"  href="#" target="_blank"> <i class="fab fa-whatsapp"></i></a>
    </div>
    <div class="c-float">
      <a class="social-float fb-msg" href="#" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
    </div>
  </div>

                <header class="site-header fixed-top" id="header-area">
                  <style>
                    #header-area p{
                      font-family: "Saritha";
                      font-size: 26px;
                    }
                  </style>
                  <article class="top-of-top">
                    <div class="container">
                      <div class="row">
                        <div class="top-header">
                          <div class="row align-items-center center">
                            <div class="col-6">
                              <div class="social-networks d-inline-block text-center">
                                <div class="icon-social">
                                    <a href="http://facebook.com/Lunabeautystudios" class="link-social popover-social" target="_blank" data-bs-toggle="popover" title="Facebook" data-bs-content="Lunabeautystudios
                                    ">
                                      <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="icon-social">
                                  <a href="https://www.instagram.com/Lunabeautystudios/" class="link-social popover-social" target="_blank" data-bs-toggle="popover" title="Instagram" data-bs-content=" @Lunabeautystudios">
                                    <i class="fab fa-instagram"></i>
                                  </a>
                                </div>

                                <div class="icon-social">
                                  <?php 
                                    if ($change_idiom > 0) {
                                      echo '
                                  <a href="tel:+1786-613-9798
                                  " class="link-social popover-social" data-bs-toggle="popover" title="Telefono" data-bs-content="(786) 613-9798
                                  ">
                                    <i class="fas fa-phone-square"></i>
                                  </a>
                                      ';
                                    }else{
                                      echo '
                                  <a href="tel:+1786-613-9798
                                  " class="link-social popover-social" data-bs-toggle="popover" title="Phone" data-bs-content="(786) 613-9798
                                  ">
                                    <i class="fas fa-phone-square"></i>
                                  </a>
                                      ';
                                    }
                                  ?>
                                </div>
                              </div>

                            </div>

                            <div class="col-6 d-flex justify-content-end">
                              <ul class="time-open list-unstyled d-inline-block mb-0" id="clock">
                                <li class="text-center">
                                  <i class="fas fa-clock me-2"></i><span class="init">09:00</span> <span>-</span>
                                  <span class="end">18:00</span> 

                                  <?php 
                                    if ($change_idiom > 0) {
                                      echo '
                                  <span class="init">(Cerrado: Domingos)</span>
                                      ';
                                    }else{
                                      echo '
                                  <span class="init">(Close sunday)</span>
                                      ';
                                    }
                                  ?>

                                </li>
                            </ul>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                </article>
                      <div class="site-navbar">
                        <nav class="navbar navbar-expand-xl">
                          <div class="container">

                                <?php 

                                  if ($change_idiom > 0) {

                                    echo/*=============================SHOW LOGO IN SPANISH===============================*/'
                            <a class="navbar-brand py-xl-0 py-1 m-0" href="index_es.php">
                                <div class="layer logo-layer">
                                  <div class="">
                                    <img style="width: 175px;" src="./library/img/logo.png" alt="">
                                  </div>
                                </div>
                            </a>
                                    ';
                                  }else{

                                    echo/*=============================SHOW LOGO IN ENGLISH===============================*/'
                            <a class="navbar-brand py-xl-0 py-1 m-0" href="index.php">
                                <div class="layer logo-layer">
                                  <div class="">
                                    <img style="width: 175px;" src="./library/img/logo.png" alt="">
                                  </div>
                                </div>
                            </a>
                                    ';
                                  }
                                ?>

                              <div class="lng-icon d-xl-none d-block">

                                <?php 

                                  if ($includ_index === 0) {

                                    echo/*=============================GO TO INDEX_ES===============================*/'
                                <a href="index_es.php">
                                  <p class="m-0 py-1 px-2" style="font-family: none; font-size: 15px;">ES</p>
                                </a>
                                    ';
                                  }else{

                                  if ($change_idiom > 0) {

                                    $link=str_replace("_es.php", ".php", $url);

                                    echo/*=============================SHOW IDIOM BUTTON ENGLISH IN SPANISH PAGE===============================*/'
                                <a href="'.$link.'">
                                  <p class="m-0 py-1 px-2" style="font-family: none; font-size: 15px;">EN</p>
                                </a>
                                    ';
                                  }else{

                                    $link=str_replace(".php", "_es.php", $url);

                                    echo/*=============================SHOW IDIOM BUTTON SPANISH IN ENGLISH PAGE===============================*/'
                                <a href="'.$link.'">
                                  <p class="m-0 py-1 px-2" style="font-family: none; font-size: 15px;">ES</p>
                                </a>
                                    ';
                                  }
                                }
                                ?>

                              </div>
                            <button class="navbar-toggler" type="button"  id="btntoggle" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse dsk-menu p-0" id="navbarSupportedContent">

                              <style>
                                #header-area .nav-item{
                                  transition: 0.3s!important;
                                }

                                #header-area .nav-item:hover{
                                  background: rgba(255,255,255,0.6)!important;
                                }
                              </style>

                                <?php 

                                  if ($change_idiom > 0) {
                                    echo/*=====================SHOW <UL> SPANISH=========================*/ '
                              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item py-0 px-2">
                                  <a class="nav-link" aria-current="page" href="about_es.php"><p style="margin: 0;">Quienes Somos</p></a>
                                </li>
                                <li class="nav-item py-0 px-2">
                                  <a class="nav-link" href="services_es.php"><p style="margin: 0;">Servicios</p></a>
                                </li>
                                <li class="nav-item py-0 px-2">
                                  <a class="nav-link" href="gallery_es.php"><p style="margin: 0;">Galeria</p></a>
                                </li>
                                <li class="nav-item py-0 px-2">
                                  <a class="nav-link" href="contact_es.php"><p style="margin: 0;">Contactos</p></a>
                                </li>
                                <li class="nav-item py-0 px-2"><a href="care_faq_es.php" class="nav-link"><p style="margin: 0;">Cuidados & Preguntas</p></a></li>
                              </ul>
                                    '; 
                                  }else{
                                    echo/*=====================SHOW <UL> ENGLISH=========================*/ '
                              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item py-0 px-2">
                                  <a class="nav-link" aria-current="page" href="about.php"><p style="margin: 0;">About Us</p></a>
                                </li>
                                <li class="nav-item py-0 px-2">
                                  <a class="nav-link" href="services.php"><p style="margin: 0;">Services</p></a>
                                </li>
                                <li class="nav-item py-0 px-2">
                                  <a class="nav-link" href="gallery.php"><p style="margin: 0;">Gallery</p></a>
                                </li>
                                <li class="nav-item py-0 px-2">
                                  <a class="nav-link" href="contact.php"><p style="margin: 0;">Contact Us</p></a>
                                </li>
                                <li class="nav-item py-0 px-2"><a href="care_faq.php" class="nav-link"><p style="margin: 0;">Care & Faq</p></a></li>
                              </ul>
                                    ';    
                                  }
                                ?>

                              <div class="lng-icon d-xl-block d-none p-2">
                                <style>
                                  .lng-icon p{
                                    background: #fff;
                                    color: #cd7c78!important;
                                    border-radius: 100%;
                                    border: 1px solid #cd7c78;
                                  }
                                </style>

                                <?php 

                                  if ($includ_index === 0) {

                                    echo/*=============================GO TO INDEX_ES===============================*/'
                                <a href="index_es.php">
                                  <p class="m-0 py-1 px-2" style="font-family: none; font-size: 15px;">ES</p>
                                </a>
                                    ';
                                  }else{

                                  if ($change_idiom > 0) {

                                    $link=str_replace("_es.php", ".php", $url);

                                    echo/*=============================SHOW IDIOM BUTTON ENGLISH IN SPANISH PAGE===============================*/'
                                <a href="'.$link.'">
                                  <p class="m-0 py-1 px-2" style="font-family: none; font-size: 15px;">EN</p>
                                </a>
                                    ';
                                  }else{

                                    $link=str_replace(".php", "_es.php", $url);

                                    echo/*=============================SHOW IDIOM BUTTON SPANISH IN ENGLISH PAGE===============================*/'
                                <a href="'.$link.'">
                                  <p class="m-0 py-1 px-2" style="font-family: none; font-size: 15px;">ES</p>
                                </a>
                                    ';
                                  }
                                }
                                ?>

                              </div>
                            </div>
                          </div>
                        </nav>


                      </div>

                </header>
