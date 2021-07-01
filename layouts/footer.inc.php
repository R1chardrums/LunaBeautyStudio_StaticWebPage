<?php 
  $url= $_SERVER["REQUEST_URI"];
  $es_en = explode("_", $url);

  $change_idiom=0;
  for ($i=0; $i < count($es_en) ; $i++) { 
    if ($es_en[$i]==="es.php") {
      $change_idiom=$change_idiom+1;
    }
  }
?>
                <footer class="site-footer">
                  <style>
                    .site-footer h4{
                        font-size: 30px;
                    }

                    .site-footer h5{
                        font-size: 30px;
                    }
                  </style>
                    <div class="container cfoot pt-5 text-xl-start text-center">
                      <div class="row">
                        <div class="col-lg-8 col-12">

                          <div class="row">
                            <div class="col-lg-4">

                                <?php 

                                  if ($change_idiom > 0) {
                                    echo/*=====================SHOW <UL> SPANISH=========================*/ '
                              <h4>Mas informacion</h4>
                              <ul class="list-unstyled foot-nav">
                                <li class="nav-item">
                                  <a class="nav-link" aria-current="page" href="about_es.php">Quiénes Somos</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="services_es.php">Servicios</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="gallery_es.php">Galería</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="contact_es.php">Contactos</a>
                                </li>
                                <li class="nav-item"><a href="care_faq_es.php" class="nav-link">Cuidados & Preguntas</a></li>
                              </ul>
                                    '; 
                                  }else{
                                    echo/*=====================SHOW <UL> ENGLISH=========================*/ '
                              <h4>More Information</h4>
                              <ul class="list-unstyled foot-nav">
                                <li class="nav-item">
                                  <a class="nav-link" aria-current="page" href="about.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="services.php">Services</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>
                                <li class="nav-item"><a href="care_faq.php" class="nav-link">Care & Faq</a></li>
                              </ul>
                                    ';    
                                  }
                                ?>
                            </div>

                            <div class="col-lg-4">
                              <?php
                                if ($change_idiom > 0) {
                                  echo '
                              <h4>Informacion de contacto<h4>
                                  ';
                                }else{
                                  echo '
                              <h4>Contact Information<h4>
                                  ';
                                }
                              ?>

                              <ul class="list-unstyled foot-nav">
                                <li class="nav-item">
                                  <a class="nav-link" aria-current="page" href="https://www.google.com/maps/place/Luna+Beauty+Studio/@39.0822749,-84.4896074,15z/data=!4m5!3m4!1s0x8841b1389f404d67:0xf0216f736ebd9857!8m2!3d39.0886428!4d-84.4909271" target="_blank"><i class="fas fa-map-marker-alt me-1"></i> 830 Monmouth St #105, Newport, KY 41071, 
                                    <?php 
                                      if ($change_idiom > 0) {
                                        echo '
                                        Estados Unidos
                                        ';
                                      }else{
                                        echo '
                                        United States
                                        ';
                                      }
                                    ?>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="tel:+1786-613-9798
                                  ">    <i class="fas fa-phone-square me-1"></i> (786) -613-9798
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-4 text-center">
                              <?php
                                if ($change_idiom > 0) {
                                  echo '
                              <h5>Siguenos o escribenos</h5>
                                  ';
                                  }else{
                                    echo '
                              <h5>Follow or Chat</h5>
                                    ';
                                  } 
                              ?>
                                <div class="row">
                                  <div class="col-lg-6 justify-content-center d-flex">
                                    <ul class="list-unstyled foot-social">
                                      <li class="nav-item">
                                        <a class="social-foot" aria-current="page" href="http://facebook.com/Lunabeautystudios" target="_blank"> <i class="fab fa-facebook"></i></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="social-foot" href="https://www.instagram.com/Lunabeautystudios/" target="_blank"><i class="fab fa-instagram"></i></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-lg-6 justify-content-center d-flex">
                                    <ul class="list-unstyled foot-social">
                                      <li class="nav-item">
                                        <a class="social-foot" aria-current="page" href="#" target="_blank"> <i class="fab fa-whatsapp"></i></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="social-foot" href="#" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                            <div class="col-lg-4 col-12 text-center">
                              <div class="logo-foot">

                                <?php 

                                  if ($change_idiom > 0) {

                                    echo/*=============================SHOW LOGO IN SPANISH===============================*/'
                               <a href="index_es.php">
                                <div class="thumb">
                                  <img src="./library/img/logo.png" alt="" srcset="" class="img-fluid d-block mx-auto" width="200">
                                </div>
                               </a>
                                    ';
                                  }else{

                                    echo/*=============================SHOW LOGO IN ENGLISH===============================*/'
                               <a href="index.php">
                                <div class="thumb">
                                  <img src="./library/img/logo.png" alt="" srcset="" class="img-fluid d-block mx-auto" width="200">
                                </div>
                               </a>
                                    ';
                                  }
                                ?>

                              </div>
                              <div class="copy-luna">
                                <?php
                                if ($change_idiom > 0) {
                                  echo '
                              <p>  ©Derechos reservados Luna Beauty Studio 2021.</p>
                                  ';
                                  }else{
                                    echo '
                              <p>  ©Copyright  Luna Beauty Studio 2021.</p>
                                    ';
                                  } 
                                ?>

                              </div>
                            </div>
                      </div>
                    </div>
                    <div class="copy-desing-col py-3">
                        <div class="container">
                          <div class="row">
                            <div class="col-12 text-center">
                              <div class="copy-ste">
                              <?php
                                if ($change_idiom > 0) {
                                  echo '
                                <p>Éste sitio web fue diseñado y desarrollado por</p>
                                  ';
                                }else{
                                  echo '
                                <p>This Website Was Designed And Developed by</p>
                                  ';
                                }
                              ?>
                                    <a href="https://josesilvera.com/" target="_blank">
                                      <img src="./library/img/Logo-JS-White-Wshadow.png" alt="" srcset="" class="mx-auto d-block">
                                    </a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </footer>
