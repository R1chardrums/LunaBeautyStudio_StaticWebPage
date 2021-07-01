<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Luna Beauty studio, Always look beautiful.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/stylesheet.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.9.0/baguetteBox.min.css" integrity="sha512-tbjZFdjHyHckTfeqkgVFcQ3GJWVfdsNYFvl+rEWmofjj9JpWaohlZgq0Vb6Hav5rqIL019LFpLsE+sTNSfNVXA==" crossorigin="anonymous"/>

    <script src="https://kit.fontawesome.com/5e2c3bbd6a.js" crossorigin="anonymous"></script>
    <title>Luna Beauty Studio - Gallery</title>
</head>
<body class="light about-body">

<style>
  .about-body .nav-link p{
    color: white;
  }

  .about-body .cus-nav .nav-link p{
    color: #6d6e70;
  }
</style>

<?php
    require_once("layouts/header.inc.php");
?>
    <main class="site-main">
        <section id="presentation-page" class="p-5">
          <style>
            #presentation-page{
              height: 400px;
              position: relative;
              background: url(library/img/lf.jpg);
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
            }

            #presentation-page::before{
              position: absolute;
              content: "";
              width: 100%;
              height: 100%;
              bottom:0;
              right:0;
              background: rgba(0,0,0,0.5);
              z-index: 1;
            }

            #presentation-page .row{
              position: relative;
              height: 100%;
              z-index: 100;
            }
          </style>
          <div class="row align-items-center justify-content-center">
            <h1 class="text-center" style="color:#fff; font-size: 45px!important;">Gallery</h1>
          </div>
        </section>

        <section id="gallery-page" class="py-5">
            <style>
                #gallery-page{
                    background: radial-gradient(219% 100%,white,#f7aba5);
                }

                .aumentar{
                    box-shadow: 0px 10px 10px grey;
                    transition: 0.4s;
                }
                .aumentar:hover{
                    transform: scale(1.1);
                }

                .b-enlace{
                    color: black;
                }

                .b-enlace:hover{
                    color: black;
                    text-decoration: none;
                }
            </style>
            <div class="container">
                <div class="row justify-content-center mt-4 mx-2 galeria-baguette">

                <div class="co-12 text-center my-3" data-aos="fade-right"><h2>Extensiones de Pestañas Clásicas</h2></div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/contact.jpg">
                                <img class="card-img-top" src="library/img/gallery/contact.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/fillin.jpg">
                                <img class="card-img-top" src="library/img/gallery/fillin.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/foot.jpg">
                                <img class="card-img-top" src="library/img/gallery/foot.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                <div class="co-12 text-center my-3" data-aos="fade-right"><h2>Extensiones de Pestañas Híbridas</h2></div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/full-set.jpg">
                                <img class="card-img-top" src="library/img/gallery/full-set.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/hybrid.jpg">
                                <img class="card-img-top" src="library/img/gallery/hybrid.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/hybrid-fill.jpg">
                                <img class="card-img-top" src="library/img/gallery/hybrid-fill.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                <div class="co-12 text-center my-3" data-aos="fade-right"><h2>Extensiones de Pestañas de Volumen</h2></div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/hybrid-lash.jpg">
                                <img class="card-img-top" src="library/img/gallery/hybrid-lash.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/lashes-our.jpg">
                                <img class="card-img-top" src="library/img/gallery/lashes-our.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/lf.jpg">
                                <img class="card-img-top" src="library/img/gallery/lf.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                <div class="co-12 text-center my-3" data-aos="fade-right"><h2>Levantamiento de Pestañas y Tinte</h2></div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/lsm.jpg">
                                <img class="card-img-top" src="library/img/gallery/lsm.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/vlm.jpg">
                                <img class="card-img-top" src="library/img/gallery/vlm.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/vlmin.jpg">
                                <img class="card-img-top" src="library/img/gallery/vlmin.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                <div class="co-12 text-center my-3" data-aos="fade-right"><h2>Microblading</h2></div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/contact.jpg">
                                <img class="card-img-top" src="library/img/gallery/contact.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/fillin.jpg">
                                <img class="card-img-top" src="library/img/gallery/fillin.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/foot.jpg">
                                <img class="card-img-top" src="library/img/gallery/foot.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                <div class="co-12 text-center my-3" data-aos="fade-right"><h2>Cejas con Polvo</h2></div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/full-set.jpg">
                                <img class="card-img-top" src="library/img/gallery/full-set.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/hybrid.jpg">
                                <img class="card-img-top" src="library/img/gallery/hybrid.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/hybrid-fill.jpg">
                                <img class="card-img-top" src="library/img/gallery/hybrid-fill.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                <div class="co-12 text-center my-3" data-aos="fade-right"><h2>Cejas Combinadas</h2></div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/hybrid-lash.jpg">
                                <img class="card-img-top" src="library/img/gallery/hybrid-lash.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/lashes-our.jpg">
                                <img class="card-img-top" src="library/img/gallery/lashes-our.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/lf.jpg">
                                <img class="card-img-top" src="library/img/gallery/lf.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                <div class="co-12 text-center my-3" data-aos="fade-right"><h2>Maquillaje de Labios</h2></div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/lsm.jpg">
                                <img class="card-img-top" src="library/img/gallery/lsm.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/vlm.jpg">
                                <img class="card-img-top" src="library/img/gallery/vlm.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 text-center mb-5" data-aos="fade-in">
                        <div class="card  aumentar">
                        <div class="cubrir">
                            <a href="library/img/gallery/vlmin.jpg">
                                <img class="card-img-top" src="library/img/gallery/vlmin.jpg" alt="...">
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
    require_once("layouts/footer.inc.php");
?>
      <!--External scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.9.0/baguetteBox.min.js" integrity="sha512-+8LoWbC6Y9Vy85wapJUYlRvabpzAIGhgiL6vZWNHn0F8EFJ43a1BCSzXo7b7OeY6bczJ3Q+ifRweZpW1iPAARg==" crossorigin="anonymous"></script>

    <!--Local scripts-->
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/nav-query.js"></script>
    <script src="./js/app.js"></script>
    <script>
    baguetteBox.run('.galeria-baguette', {
    animation: 'fadeIn',});
    </script>
</body>
</html>
