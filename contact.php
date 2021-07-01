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
    <title>Luna Beauty Studio - Contact Us</title>
</head>
<body class="light contact-body">

<style>
  .contact-body .nav-link p{
    color: white;
  }

  .contact-body .cus-nav .nav-link p{
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
    	      background: url(library/img/lsm.jpg);
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
    	    <h1 class="text-center" style="color:#fff; font-size: 45px!important;">Contact Us</h1>
    	  </div>
    	</section>

    	<section id="social-section">
    		<style>
                #social-section h3{
                    font-size: 30px;
                }

                #social-section .phone{
                    font-family: "Playfair Display"!important;
                }

    			#social-section a{
    				transition: 0.3s;
    				color: #f7aba5;
    			}

          #social-section a:hover{
    				text-shadow: 3px 3px 1px #cd7c78;
    			}   			
    		</style>
    		<div class="container">
    			<div class="row py-5">
    				<div class="col-md-4 text-center my-2" data-aos="fade-in" data-aos-duration="1500">
    					<a href="http://facebook.com/Lunabeautystudios" target="_blank"><i class="fab fa-facebook fa-8x"></i></a>
    					<h3 class="mt-3">Our Facebook</h3>
    				</div>
    				<div class="col-md-4 text-center my-2" data-aos="fade-in" data-aos-duration="1500">
    					<a href="https://www.instagram.com/Lunabeautystudios/" target="_blank"><i class="fab fa-instagram fa-8x"></i></a>
    					<h3 class="mt-3">Our Instagram</h3>
    				</div>
    				<div class="col-md-4 text-center my-2" data-aos="fade-in" data-aos-duration="1500">
    					<a href="tel:(786) 613-9798" target="_blank"><i class="fas fa-phone-square fa-8x"></i></a>
    					<h3 class="mt-3 phone">(786) 613-9798</h3>
    				</div>
    			</div>
    		</div>
    	</section>

    	<section id="form-section">
    		<style>
    			#form-section{
    				background: radial-gradient(219% 100%,white,#f7aba5);
    			}

    			#form-section p{
    				color: #6d6e70;
    				margin: 0;
    			}

    			#form-section img{
    				width: 100%;
    				height: 100%;
    			}
    		</style>

    		<div class="container-fluid">
    			<div class="row align-items-center">
    				<div class="col-md-6 p-0">
    					<img src="library/img/contact.jpg" alt="...">
    				</div>

    				<div class="col-md-6 p-4">

						<form>
						  <div class="row">
						  	<div class="col-12 text-center">
						  		<h2 style="color:#6d6e70!important; font-size: 30px!important;">Send us a message</h2>
						  	</div>
						    <div class="form-group col-md-6 my-2">
						      <label for="name"><p>Name</p></label>
						      <input type="text" class="form-control" id="name">
						    </div>
						    <div class="form-group col-md-6 my-2">
						      <label for="mail"><p>Email</p></label>
						      <input type="email" class="form-control" id="mail">
						    </div>
						  </div>
						  <div class="row">
							<div class="form-group col-md-6 my-2">
							  <label for="phone"><p>Phone</p></label>
							  <input type="number" class="form-control" id="phone">
							</div>
				                <div class="form-group col-md-6 my-2">
				                	<label for="service"><p>Services</p></label>
				                    <select class="form-control" id="service">
				                    	<option value="">Select</option>
				                    	<option value="Classic Lash Extensions">Classic Lash Extensions</option>
				                    	<option value="Hybrid Lash Extensions">Hybrid Lash Extensions</option>
				                    	<option value="Volume Lash Extensions">Volume Lash Extensions</option>
				                    	<option value="Lash Lift & Tint">Lash Lift & Tint</option>
				                    	<option value="Microblading">Microblading</option>
				                    	<option value="Powder Brows">Powder Brows</option>
				                    	<option value="Combo Brows">Combo Brows</option>
				                    	<option value="Lip Blush">Lip Blush</option>
				                    </select>
				                </div>
						  </div>
						    <div class="form-group my-2">
						      <label for="message"><p>Message</p></label>
						      <textarea class="form-control" id="message"></textarea>
						    </div>
						    <div class="col-12 text-center mt-4">
						  		<button type="submit" class="btn-reviews">Send Message</button>
							</div>
						</form>

    				</div>
    			</div>
    		</div>
    	</section>

        <section id="map-section">
            <style>
                #map-section{
                    height: 400px;
                }

                #map-section iframe{
                    width: 100%;
                    height: 400px;
                }
            </style>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12388.249858199857!2d-84.4896074!3d39.0822749!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8841b1389f404d67%3A0xf0216f736ebd9857!2sLuna%20Beauty%20Studio!5e0!3m2!1sen!2sve!4v1610847405305!5m2!1sen!2sve" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </section>

<?php
	require_once("layouts/newsletter.inc.php");
?>
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
