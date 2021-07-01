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
    <title>Luna Beauty Studio - Services</title>
</head>
<body class="light services-body">

<style>
  .services-body .nav-link p{
    color: white;
  }

  .services-body .cus-nav .nav-link p{
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
    	      background: url(library/img/hybrid-fill.jpg);
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
    	    <h1 class="text-center" style="color:#fff; font-size: 45px!important;">Services</h1>
    	  </div>
    	</section>

      <div class="about-lashes">
        <div class="container-fluid px-0">
              <div class="row mx-0">
                <div class="col-lg-6 col-12 py-4">
                  <div class="overlay-img">
                    <div class="layer" style="padding-top:350px">
                      <figure class="thumb">
                        <img src="./library/img/lashes-our.jpg" alt="">
                      </figure>
                    </div>

                </div>
                </div>

                <div class="col-lg-6 col-12 text-center py-3">

                  <div class="content-lashes" data-aos="fade-up"
                  data-aos-anchor-placement="top-center">
                    <style>
                      .about-lashes h3{
                        font-size: 30px;
                      }
                    </style>
                    <h3 class="h2">
                      About our Lashes
                    </h3>
                    <p>
                      All lash services are done using the highest quality brands in the eyelash industry.

                    </p>
                    <p>
                      There are many different types of curls, lengths and diameters when styling the perfect set and it is our job to consult with our clients and come up with a solution to pick the most flattering look for their face and eye shape.
                    </p>
                    <p>
                      We make sure to help our clients maintain the extent of their lashes without damaging any naturals along the way.
                    </p>
                  </div>
                </div>
              </div>

        </div>
      </div>

    	<section id="first-modals" class="p-4">
    		<style>
    			#first-modals{
                    background: #fdf9f8;
    			}

    			#first-modals p,h3{
    				color: white;
    			}

                #first-modals  .sv-rectangle {
                  position: relative;
                  background-color: #6d6e70;
                  background-size: cover;
                  background-position: center 50%;
                  background-repeat: no-repeat;
                  padding: 5px;
                  height: 150px;
                  transition: 0.3s;
                  overflow: hidden;
                  border-radius: 10px;
                  box-shadow: 3px 3px 6px #b1afaf;                  
                }
                #first-modals  .sv-rectangle .pos {
                  height: 100%;
                }
                #first-modals  .sv-rectangle::after {
                  content: "";
                  position: absolute;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  width: 100%;
                  height: 100%;
                  z-index: 1;
                  background: #131313;
                  background: radial-gradient(circle, rgba(19, 19, 19, 0.3) 72%, rgba(97, 94, 94, 0.5382528011) 100%);
                }
                #first-modals  .sv-rectangle:hover {
                  cursor: pointer;
                  opacity: 0.9;
                }
                #first-modals  .sv-rectangle .row {
                  position: relative;
                  height: 100%;
                  justify-content: center;
                  align-items: flex-end;
                  padding: 15px;
                  z-index: 5;
                }
                @media (max-width: 991.98px) {
                  #first-modals  .sv-rectangle .sv-content {
                    text-align: center;
                  }
                }
                #first-modals  .sv-rectangle .sv-content h3 {
                  color: #fff;
                }
                #first-modals  .sv-rectangle .smbtn {
                  text-align: center;
                }
                #first-modals  .sv-rectangle .sv-rectangle-link {
                  position: relative;
                  text-decoration: none;
                  display: block;
                  height: 100%;
                  z-index: 5;
                }
                #first-modals  .sv-rectangle .sv-rectangle-link:hover {
                  cursor: pointer;
                }

    	    	#first-modals .modal-body p{
    	    		color:black!important;
    	    	}

    	    	#first-modals .modal-body h3{
    	    		color:#cd7c78!important;
                    font-family: 'Playfair Display'!important;
    	    	}

    	    	#first-modals .modal-body h4{
    	    		color:#cd7c78!important;
                    font-family: 'Playfair Display'!important;
    	    	}

    	    	#first-modals .image-m{
    	    		overflow:hidden;
    	    	}

    	    	#first-modals img{
    	    		width:100%;
    	    	}
    		</style>

                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-12 col-lg-6 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".classic-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/full-set.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Classic Lash Extensions
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".classic-m"><span>Book Now</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>

                          <div class="col-12 col-lg-6 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".hybrid-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/fillin.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Hybrid Lash Extensions
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".hybrid-m"><span>Book Now</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>


                          <div class="col-12 col-lg-6 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".volume-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/hybrid.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Volume Lash Extensions</h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".volume-m"><span>Book Now</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>

                          <div class="col-12 col-lg-6 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".lip-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/lip-blush.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Lip Blush</h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".lip-m"><span>Book Now</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>

                      </div>
                  </div>

			<div class="modal fade classic-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
		    		<div class="container">
		    			<div class="row">
		    				<div class="col-12 image-m">
		    					<img src="library/img/full-set.jpg" alt="...">
		    				</div>
		    			</div>
		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Classic Full Set</h3>
		    					<p style="font-weight: bold; font-size:20px;">$120</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Is a technique in which a single extension is applied to one isolated natural lash. Classic lashes are perfect for adding length and some fullness to your natural lash line.  A classic set can result in a natural or dramatic appearance depending on how many natural lashes the client has for us to work with. This style is less dramatic than volume sets and is usually suitable for those who are looking to create a “mascara” effect.</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Classic Fill In</h3>
		    					<p style="font-weight: bold; font-size:20px;">2 weeks $60  -  3 weeks $70 (1:30mins)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Classic infills are required every 2-3 weeks to ensure a symmetrical look.</p>

		    					<p><strong>Strictly enforced</strong>: There must be at least 40% of lashes remaining for it to be considered a fill. Anything less is considered a full set, and a full set price will be charged.</p>

		    					<p><strong>Please note: We do not take new clients for outside fills and a removal service may be necessary before applying a new full set</strong></p>
		    				</div>
		    			</div>
		    		</div>
			  	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Close</button>
			  	  </div>
			  	  </div>
			  	  </div>

			  	</div>
			  </div>
			</div>


			<div class="modal fade hybrid-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
		    		<div class="container">
		    			<div class="row">
		    				<div class="col-12 image-m">
		    					<img src="library/img/fillin.jpg" alt="...">
		    				</div>
		    			</div>
		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Hybrid Full Set</h3>
		    					<p style="font-size: 20px; font-weight: bold;">$150 (2 hours)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Hybrid eyelashes is a mix between classic and volume eyelashes, this technique is versatile in offering a thicker, denser look than classic lashes, but without the uniformity and softness of a typical Russian volume set.</p>

		    					<p>If you’ve been thinking of upgrading your classic set, we can pretty much guarantee you will love hybrid lashes!</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Hybrid Fill In</h3>
		    					<p class="mt-3" style="font-size: 20px; font-weight: bold;">2 weeks $65 - 3 weeks $75 (1:30min)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Hybrid fills are required every 2 or 3 weeks, it is very important to follow the aftercare instructions to ensure a healthy and clean set.</p>

		    					<p><strong>Strictly enforced</strong>: There must be at least 40% of lashes remaining for it to be considered a fill. Anything less is considered a full set, and a full set price will be charged.</p>

		    					<p><strong>Please note: We do not take new clients for outside fills and a removal service may be necessary before applying a new full set.</strong></p>
		    				</div>
		    			</div>
		    		</div>
			  	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Close</button>
			  	  </div>
			  	  </div>
			  	  </div>

			  	</div>
			  </div>
			</div>

			<div class="modal fade volume-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
		    		<div class="container">
		    			<div class="row">
		    				<div class="col-12 image-m">
		    					<img src="library/img/hybrid.jpg" alt="...">
		    				</div>
		    			</div>
		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Volume Full Set</h3>
		    					<p style="font-weight: bold; font-size:20px;">$190 (2:45mins)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Volume eyelash extensions are an advanced application technique that results in a more dramatic effect. Each hand-made fan is created by applying 3-6 extensions (thinner in diameter) to one and every natural lash. Volume lashes are perfect for clients who naturally have sparse, thin lashes and want a bolder look or for those who naturally have healthy lashes but are still looking to create a “strip-like" and glamorous style.</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Volume Fill In</h3>
		    					<p style="font-weight: bold; font-size:20px;">2 weeks $75 - 3weeks $85</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Volume fills are required every 2 or 3 weeks, it is very important to follow the aftercare instructions to ensure a healthy and clean set.</p>

		    					<p><strong>Strictly enforced</strong>: There must be at least 40% of lashes remaining for it to be considered a fill. Anything less is considered a full set, and a full set price will be charged.</p>

		    					<p><strong>Please note: We do not take new clients for outside fills and a removal service may be necessary before applying a new full set</strong></p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Lash Removal</h3>
		    					<p style="font-weight: bold; font-size:20px;">$25 (30min)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>If you have decided to take a break from lashes, you can get them removed instead of waiting for all the lashes to fall off.</p>

		    					<p>Lash Removals take anywhere between 10-30 minutes depending on how many eyelash extensions you have remaining. A special glue remover is applied to take the extensions off. Outside lash removals are welcomed.</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Lash Lift</h3>
		    					<p style="font-weight: bold; font-size:20px;">$95 (1 hour)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Lash lift is a semi- permanent technique that lifts your eyelashes at the root giving a longer, fuller, thicker look. It could last up to 8 weeks! If you love your long eyelashes but you are not sure about extensions, then this service is perfect for you! Your results will be more dramatic if your natural lashes are healthy and medium to long length. You can also add a lash tint to make your lashes look darker</p>
		    				</div>
		    			</div>
		    		</div>
			  	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Close</button>
			  	  </div>
			  	  </div>
			  	  </div>

			  	</div>
			  </div>
			</div>

      <div class="modal fade lip-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="row">
            <div class="col-12 text-center">
            <div class="modal-header">
            </div>
            <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-12 image-m">
                  <img src="library/img/lip-blush.jpg" alt="...">
                </div>
              </div>
              <div class="row align-items-center py-4">
                <div class="col-md-5 text-center">
                  <h3></h3>
                  <p style="font-weight: bold; font-size:20px;"></p>
                </div>

                <div class="col-md-7 text-center">
                  <p></p>
                </div>
              </div>

              <div class="row align-items-center py-4">
                <div class="col-md-5 text-center order-lg-2">
                  <h3></h3>
                  <p style="font-weight: bold; font-size:20px;"></p>
                </div>

                <div class="col-md-7 text-center order-lg-1">
                  <p></p>

                  <p></p>

                  <p></p>
                </div>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-ste" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>

          </div>
        </div>
      </div>

    	</section>

    	<section id="permanent-makeup" class="p-4">
    		<div class="container">
    			<div class="row">
    				<div class="col-12 text-center">
    					<h2 style="color:#cd7c78!important; font-size: 30px;"></h2>

    					<p></p>

    					<p></p>

    					<p></p>

    					<p></p>
    				</div>
    			</div>
    		</div>
    	</section>

      <div class="about-lashes">
        <div class="container-fluid px-0">
              <div class="row mx-0">

                <div class="col-lg-6 col-12 text-center py-3">

                  <div class="content-lashes" data-aos="fade-up"
                  data-aos-anchor-placement="top-center">
                    <style>
                      .about-lashes h3{
                        font-size: 30px;
                      }
                    </style>
                    <h3 class="h2">
                      Permanent Makeup Services
                    </h3>
                    <p>
                      Let’s talk about eyebrows! We have all spent most of our lives tweezing, waxing, threading, filling I, drawing on, hiding scars and trying to achieve that perfect arch or that perfect shape.

                    </p>
                    <p>
                      There are many factors that can affect our eyebrow hair growth including age, over tweezing, scars, chemotherapy, alopecia, etc.
                    </p>
                    <p>
                      Choosing Microblading alone or doing a combo brow comes down to what you are looking to achieve.
                    </p>
                    <p>
                      If you are just wanting to create a natural light hair stroke look then Microblading alone is the route to go. Microblading alone will not achieve a “makeup look”, it’s meant solely to create “little hairs” but also give you the ability to add makeup for a more dramatic look. If you are wanting darker, fuller more of a “makeup look” then a combination brow is what you are looking for.
                    </p>
                  </div>
                </div>
                <div class="col-lg-6 col-12 px-0">
                  <div class="overlay-img">
                    <div class="layer" style="padding-top:350px">
                      <figure class="thumb">
                        <img src="./library/img/microblading.jpg" alt="">
                      </figure>
                    </div>

                </div>
                </div>
              </div>
        </div>
      </div>

    	<section id="second-modals" class="p-4">
    		<style>
    			#second-modals{
					background: #fdf9f8;
    			}

    			#second-modals p,h3{
    				color: white;
    			}

                #second-modals  .sv-rectangle {
                  position: relative;
                  background-color: #6d6e70;
                  background-size: cover;
                  background-position: center 50%;
                  background-repeat: no-repeat;
                  padding: 5px;
                  height: 150px;
                  transition: 0.3s;
                  overflow: hidden;
                  border-radius: 10px;
                  box-shadow: 3px 3px 6px #b1afaf;
                }
                #second-modals  .sv-rectangle .pos {
                  height: 100%;
                }
                #second-modals  .sv-rectangle::after {
                  content: "";
                  position: absolute;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  width: 100%;
                  height: 100%;
                  z-index: 1;
                  background: #131313;
                  background: radial-gradient(circle, rgba(19, 19, 19, 0.3) 72%, rgba(97, 94, 94, 0.5382528011) 100%);
                }
                #second-modals  .sv-rectangle:hover {
                  cursor: pointer;
                  opacity: 0.9;
                }
                #second-modals  .sv-rectangle .row {
                  position: relative;
                  height: 100%;
                  justify-content: center;
                  align-items: flex-end;
                  padding: 15px;
                  z-index: 5;
                }
                @media (max-width: 991.98px) {
                  #second-modals  .sv-rectangle .sv-content {
                    text-align: center;
                  }
                }
                #second-modals  .sv-rectangle .sv-content h3 {
                  color: #fff;
                }
                #second-modals  .sv-rectangle .smbtn {
                  text-align: center;
                }

                #second-modals .sv-rectangle .sv-rectangle-link {
                  position: relative;
                  text-decoration: none;
                  display: block;
                  height: 100%;
                  z-index: 5;
                }
                #second-modals  .sv-rectangle .sv-rectangle-link:hover {
                  cursor: pointer;
                }

    	    	#second-modals .modal-body p{
    	    		color:black!important;
    	    	}

    	    	#second-modals .modal-body h3{
    	    		color:#cd7c78!important;
                    font-family: 'Playfair Display'!important;
    	    	}

    	    	#second-modals .modal-body h4{
    	    		color:#cd7c78!important;
                    font-family: 'Playfair Display'!important;
    	    	}

    	    	#second-modals .image-m{
    	    		overflow:hidden;
    	    	}

    	    	#second-modals img{
    	    		width:100%;
    	    	}
    		</style>

                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-12 col-lg-4 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".microblading-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/microblading.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Microblading
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".microblading-m"><span>Book Now</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>

                          <div class="col-12 col-lg-4 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".powder-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/powder-brows.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Powder Brows
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".powder-m"><span>Book Now</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>


                          <div class="col-12 col-lg-4 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".combo-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/microshading.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Microshading - Combo Brows</h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".combo-m"><span>Book Now</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>
                      </div>
                  </div>

			<div class="modal fade microblading-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
			  	  	<div class="container">
			  	  		<div class="row">
			  	  			<div class="col-12 image-m">
			  	  				<img src="library/img/microblading.jpg" alt="...">
			  	  			</div>
			  	  		</div>
			  	  		<div class="row">
			  	  			<div class="col-12 text-center">
			  	  				<h3 class="my-4">Microblading</h3>
			  	  				<p>Microblading is a semi-permanent brow tattoo service that lasts about 1-3 years depending on your skin type and lifestyle after your 6-10 week touch up. Microblading is dine with a manual hand tool designed to create fine, hair-like strokes for a natural appearance. Microblading is ideal for filling in sparse areas of the eyebrow, defining and enhancing brow shape.</p>

			  	  				<p>Microblading is similar to getting a tattoo on your body, but it doesn’t go as deep. Tattoos go to the dermis which is why it is permanent whereas microblading goes to the epidermis. This is also why you don’t get discoloration if done properly and also why it lasts for a few years versus a lifetime.</p>

			  	  				<p>The brow shape and color is custom-made to your facial structure and preference with the latest Hyper-realistic technique, we can achieve a very natural and soft look. We only use the highest quality of cruelty-free/vegan pigments as well as disposable sterile tools.</p>

			  	  				<p>● Natural realistic results</p>

			  	  				<p>● Ideal for Normal/Dry skin</p>

			  	  				<p>● NOT Ideal for Extremely Oily Thick Skin with large pores</p>

			  	  				<p>● NOT ideal for very sparse brows</p>

			  	  				<h3 class="my-4">Benefits of Microblading </h3>

			  	  				<p>Anyone who benefits from brow pencil could be a candidate for microblading.</p>

			  	  				<p>Angella Marselo Reviwe: I Got my brows microbladed. In just 2 hours, I went from having zero brows to having soft, natural-looking arches. I felt reborn, like my brows had been baptized, and they would never again be the same (well, for the next year or two).</p>

			  	  				<h3 class="my-4">How to Prepare for Microblading</h3>

			  	  				<p>About a week before your microblading appointment, hold off on waxing, threading or tweezing your eyebrows. A full day prior, you'll want to steer clear of alcohol and caffeine since they can increase skin's sensitivity. Also, avoid taking ibuprofen, aspirin, fish oil, or vitamin E supplements and other blood thinners.1 And let's not forget: Try to relax.</p>

			  	  				<h3 class="my-4">What To Expect During A Microblading Appointment:</h3>
			  	  				<h4 class="mb-4">Step 1: We Numb Your Brows</h4>

			  	  				<p>A lot of clients ask us, "Does it hurt?" The answer is: nope! Most clients do not complain about any pain, and some even fall asleep during the process! Before the procedure, we apply a topical anesthetic and wait 20 minutes to ensure you feel as little discomfort as possible. You can sit back, relax, and dream of having eyebrows in the shower... because it's all happening!</p>

			  	  				<h4 class="my-4">Step 2: We Interview You</h4>

			  	  				<p>After we numbed your brows, we'll interview you about your makeup routine and lifestyle. Do you draw your brows on everyday or only special occasions? Do you like bold, statement brows or soft, subtler brows? Many clients have over-plucked in the past, and want a return to their signature look. During the interview, we'll work with you to customize your best brow.</p>

			  	  				<h4 class="my-4">Step 3: We Draw Your Best Brows</h4>

			  	  				<p>Once we determine your best brows, we'll sketch your new eyebrows directly on your face. During this step, we'll ask you to smile, laugh, and make different facial expressions. Our goal is to create beautiful brows that match the symmetry of your face. We'll help you find the perfect color and shape just for your face.</p>

			  	  				<h4 class="my-4">Step 4: Procedure Begins</h4>

			  	  				<p>Once your eyebrows are numb, we begin the treatment. This takes approximately one hour.</p>

			  	  				<h4 class="my-4">Step 5: We Reveal Your New Eyebrows</h4>

			  	  				<p>And finally, the big reveal! This is the beginning of a beautiful relationship between you and your eyebrows! No more stressful morning maintenance. No more eyebrows on your pillow. Just perfect brows every day, rain or shine!</p>

			  	  			</div>
			  	  		</div>
			  	  	</div>
		    	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Close</button>
			  	  </div>
			  	  </div>
			  	  </div>
			  	  </div>

			  	</div>
			  </div>

			<div class="modal fade powder-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
			  	  	<div class="container">
			  	  		<div class="row">
			  	  			<div class="col-12 image-m">
			  	  				<img src="library/img/powder-brows.jpg" alt="...">
			  	  			</div>
			  	  		</div>
			  	  		<div class="row">
			  	  			<div class="col-12 text-center">
			  	  				<h3 class="my-4">Powder Brows</h3>

			  	  				<p>Powder brows is a cosmetic semi permanent makeup technique designed to create eyebrows with soft powder effect, very similar to powder makeup. Powder effect is done with a shading technique using a permanent makeup device, which is similar to a tattoo gun. It gives great definition & depth to the eyebrows. It is particularly recommended for women with oily skin or combination skin or anyone who fills in their brows regularly with pencil or shadow.</p>

			  	  				<p>● Ideal for Oily and all skin types</p>

			  	  				<p>● Can be both soft or bold based on preference</p>

			  	  				<p>● Makeup-look </p>

			  	  				<p>● Long lasting</p>

			  	  				<p>● Trending technique.</p>

			  	  				<h3 class="my-4">What is the Difference between Ombre Powder Brows & Microblading?</h3>

			  	  				<p>The biggest difference between the two semi-permanent eyebrow styling techniques is how the pigment is deposited into the skin. Microblading uses a handheld tool to carve small cuts into the skin, whereas Ombre brows are done using a machine. The ombre powder technique is a bit less invasive than that of microblading.</p>

			  	  				<h3 class="my-4">How Long Does Ombre Brows Last?</h3>

			  	  				<p>Ombre brows can last anywhere from two to five years. The retention will depend on a number of factors, such as lifestyle, skin type, sun exposure, health condition, etc.</p>

			  	  				<h3 class="my-4">What are the Main Benefits of Ombre Powder Brows?</h3>

			  	  				<p>● Ombre powder brows are great for any skin type, unlike microblading, which may not work well on oily skinned beauties.</p>

			  	  				<p>● Your eyebrow will look fuller, more defined as well as dramatic.</p>

			  	  				<p>● Ombre brows last longer than microbladed brows, usually up to 5 years.</p>

			  	  				<p>● The ombre powder technique is a bit less invasive than that of microblading.</p>

			  	  				<p>● Also, this semi-permanent eyebrow styling technique is less painful than that of microblading.</p>

			  	  				<h3 class="my-4">Who is a Good Candidate for Ombre Brows?</h3>

			  	  				<P>Unlike Microblading, Ombre Powder Brows are great for any skin type. Oily skinned beauties as well as very dark-haired clients benefit the most from Ombre Powder Brows.</P>
			  	  			</div>
			  	  		</div>
			  	  	</div>
		    	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Close</button>
			  	  </div>
			  	  </div>
			  	  </div>
			  	  </div>

			  	</div>
			  </div>

			<div class="modal fade combo-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
			  	  	<div class="container">
			  	  		<div class="row">
			  	  			<div class="col-12 image-m">
			  	  				<img src="library/img/microshading.jpg" alt="...">
			  	  			</div>
			  	  		</div>
			  	  		<div class="row">
			  	  			<div class="col-12 text-center">
			  	  				<h3 class="my-4">Microshading - Combo Brows</h3>

			  	  				<p>Microshading is a semi-permanent brow tattoo service that lasts about 1-3 years depending on your skin type and lifestyle after your 6-10 week touch up. Microshading is a combination of manual technique where we blade individual hair strokes and manual or machine shading where we fill in gaps. Microshading is often called “combo brows” because we’re combining the two technique.</p>

			  	  				<p>Microshading is similar to getting a tattoo on your body, but it doesn’t go as deep. Tattoos go to the dermis which is why it is permanent whereas microshading goes to the epidermis. This is also why you don’t get discoloration if done properly and also why it lasts for a few years versus a lifetime. </p>

			  	  				<h3 class="my-4">Who Is The Ideal Client?</h3>

			  	  				<p>● Anyone looking for a complete brow look </p>

			  	  				<p>● Anyone with little to no hair </p>

			  	  				<p>● All skin type- especially oily</p>

			  	  				<p>● Old permanent makeup cover up (must book consult to go over realistic goals)</p>

			  	  				<p>Each individual’s experience will vary due to their skin type and also lifestyle, but it is important to schedule your complimentary consultation to go over individual questions and concerns. </p>

			  	  			</div>
			  	  		</div>
			  	  	</div>
		    	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Close</button>
			  	  </div>
			  	  </div>
			  	  </div>
			  	  </div>

			  	</div>
			  </div>
    	</section>

    	<section id="contact-section" class="p-4 py-5">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-6 text-center">
    					<h2 style="color:#cd7c78!important; font-size: 35px;">Book your appointment today</h2>
    				</div>
    				<div class="col-md-6 text-center">
    					<a href="contact.php"><button type="button" class="btn btn-ste" data-dismiss="modal">Contact Us</button></a>
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!--Local scripts-->
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/nav-query.js"></script>
  <script src="./js/app.js"></script>
</body>
</html>
