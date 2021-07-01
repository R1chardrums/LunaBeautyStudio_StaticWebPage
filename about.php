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


    <script src="https://kit.fontawesome.com/5e2c3bbd6a.js" crossorigin="anonymous"></script>
    <title>Luna Beauty Studio - About Us</title>
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
    	      background: url(library/img/fillin.jpg);
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
    	    <h1 class="text-center" style="color:#fff; font-size: 45px!important;">About Us</h1>
    	  </div>
    	</section>

        <section class="aboutus p-4">
        	<style>
        		.aboutus{
        			background: #fdf9f8;
        		}

            .aboutus h3{
              font-size: 30px;
            }

				    .aboutus .thumb{
				      border: 15px solid #F3DFDE;
				      border-radius: 10px;
				      box-shadow: 2px 2px 15px 10px #f5d1d0;
				    }

				    .aboutus img{
				    	width: 95%;
				    }
        	</style>
              <div class="container">
                <div class="row justify-content-center py-4">
                  <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                    <div class="content-aboutus" data-aos="fade-up">
                      <h3 class="h2">About Ivanny Melero</h3>
                      <div class="paragraphs" >
                        <p>
							Hi everyone! I am Ivanny, founder and creator of Luna Beauty Studio. I am a Beauty Specialist and entrepreneur. I started my beauty career as a Lash Artist in 2018 and months later I decided to take my first microblading class with the best academy in the world, Phi Academy! After I took that class I knew this was my passion.  I grew up in love with art, especially drawing! Eventually my art skills brought me to makeup💄.
                        </p>

                        <p>
							Naturally, my love for art and makeup led me to the PMU world. The most interesting thing about permanent makeup is the transformation. The most rewarding thing about it is the look on a client's face when they see the transformation. Seeing someone's confidence level rise in front of me makes me the happiest.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-5 col-12 text-center" data-aos="fade-in">

                          <figuire>
                            <img class="thumb" src="./library/img/luna-1.jpg" alt="">
                          </figuire>

                  </div>
                </div>

                <div class="row mt-3 justify-content-center py-4">
                  <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center order-lg-2">
                    <div class="content-aboutus" data-aos="fade-up">
                      <div class="paragraphs" >
                        <p>
							My goal in Microblading/PMU and other beauty services is to highlight natural beauty through achieving perfection in the same way our world achieves perfection itself with Golden Ratio and Naturalness.
                        </p>

                        <p>
							Luna Beauty Studio is a cosmetic tattoo & lash studio that specializes in natural brow enhancements such as microblading, powder brows, combo brows, lip blush, lash extensions and more…  mmmm
                        </p>

                		<p>
							We are so happy you are here and hope you'll join our Luna Beauty Studio family!
                		</p>

                		<p>
							Thank you for reading our story, and watching as it continues to be written!
                		</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-5 col-12 text-center order-lg-1" data-aos="fade-in">

                          <figuire>
                            <img class="thumb" src="./library/img/luna-2.jpg" alt="">
                          </figuire>

                  </div>
                </div>
              </div>
        </section>

        <section id="mvv-section">
          <style>
            #mvv-section{
              background-color: #fff;
            }

            #mvv-section .card{
              background: radial-gradient(219% 100%,white,#f7aba5);
              border:0;
              border-radius: 10px;
              box-shadow: 2px 2px 8px 3px #f5d1d0;
              height: 100%;
            }

            #mvv-section h3{
              color: #f7aba5;
            }

            #mvv-section i{
              color: #6d6e70;
            }
          </style>
          <div class="container py-4">
            <div class="row py-5">


              <div class="col-lg-4 text-center px-4 my-3" data-aos="fade-up" data-aos-duration="1500">
                <div class="card py-4">
                  <i class="fas fa-crown fa-3x"></i>
                  <div class="card-body">
                    <h3 class="card-title py-3">Mission</h3>
                    <p class="card-text">Hi! This is a text created by Jose Silvera Enterprise to place you where company information is missing.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 text-center px-4 my-3" data-aos="fade-down" data-aos-duration="1500">
                <div class="card py-4">
                  <i class="fas fa-eye fa-3x"></i>
                  <div class="card-body">
                    <h3 class="card-title py-3">Vision</h3>
                    <p class="card-text">Hi! This is a text created by Jose Silvera Enterprise to place you where company information is missing.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 text-center px-4 my-3" data-aos="fade-up" data-aos-duration="1500">
                <div class="card py-4">
                  <i class="fas fa-hands-helping fa-3x"></i>
                  <div class="card-body">
                    <h3 class="card-title py-3">Value</h3>
                    <p class="card-text">Hi! This is a text created by Jose Silvera Enterprise to place you where company information is missing.</p>
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

	<!--Local scripts-->
	<script src="./js/owl.carousel.min.js"></script>
	<script src="./js/nav-query.js"></script>
	<script src="./js/app.js"></script>
</body>
</html>
