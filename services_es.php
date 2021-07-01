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
    <title>Luna Beauty Studio - Servicios</title>
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
    	    <h1 class="text-center" style="color:#fff; font-size: 45px!important;">Servicios</h1>
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
                      Sobre Nuestras Pestañas
                    </h3>
                    <p>
                      Todos los servicios de pestañas se realizan con marcas de la más alta calidad en la industria de las pestañas.

                    </p>
                    <p>
                      Hay muchos diferentes tipos de rizos, longitudes y diámetros al diseñar el conjunto perfecto y es nuestro trabajo consultar con nuestros clientes y encontrar una solución para elegir el aspecto más favorable para la forma de su rostro y ojos.
                    </p>
                    <p>
                      Nos aseguramos de ayudar a nuestros clientes a mantener la extensión de sus pestañas sin dañar sus pestañas naturales durante el proceso.
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
                                     <h3>Extensiones de Pestañas Naturales
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".classic-m"><span>Haz una Cita</span></a>
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
                                     <a class="btn-ste" data-toggle="modal" data-target=".hybrid-m"><span>Haz una Cita</span></a>
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
                                     <h3>Extensiones de Pestañas de Volumen</h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".volume-m"><span>Haz una Cita</span></a>
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
                                     <h3>Maquillaje de Labios</h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".lip-m"><span>Haz una Cita</span></a>
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
		    					<h3>Conjunto Completo Clásico</h3>
		    					<p style="font-weight: bold; font-size:20px;">$120</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Es una técnica en la que se aplica una sola extensión a una pestaña natural aislada. Las pestañas clásicas, son perfectas para agregar longitud y un poco de volumen a su línea natural de pestañas. Un conjunto clásico puede resultar en una apariencia natural o llamativa, dependiendo de cuántas pestañas naturales tenga el cliente para que trabajemos. Este estilo es menos dramático que los conjuntos de volumen y generalmente, es adecuado para aquellos que buscan crear un efecto de "rímel".</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Relleno Clásico</h3>
		    					<p style="font-weight: bold; font-size:20px;">2 Semanas $60 - 3 Semanas $70 (1:30min)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Se requieren rellenos clásicos cada 2-3 semanas para garantizar un aspecto simétrico.</p>

		    					<p><strong>Cumplimiento estricto</strong>: Debe quedar al menos un 40% de pestañas para que se considere un relleno. Cualquier cantidad menor se considera un conjunto completo y se cobrará un precio de conjunto completo.</p>

		    					<p><strong>Tenga en cuenta: No aceptamos nuevos clientes para rellenos externos, y puede ser necesario un servicio de eliminación antes de aplicar un nuevo conjunto completo.</strong></p>
		    				</div>
		    			</div>
		    		</div>
			  	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
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
		    					<h3>Conjunto Completo Híbrido</h3>
		    					<p style="font-size: 20px; font-weight: bold;">$150 (2 horas)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Las pestañas híbridas son una mezcla entre pestañas clásicas y de volumen, esta técnica es versátil al ofrecer un aspecto más grueso y denso que las pestañas clásicas, pero sin la uniformidad y suavidad de un conjunto de volumen típico ruso.</p>

		    					<p>Si ha estado pensando en actualizar su estilo clásico, ¡podemos garantizarle que le encantarán las pestañas híbridas!</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Relleno Híbrido</h3>
		    					<p class="mt-3" style="font-size: 20px; font-weight: bold;">2 semanas $ 65 - 3 semanas $ 75 (1: 30min)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Se requieren rellenos híbridos cada 2 ó 3 semanas, es muy importante seguir las instrucciones de cuidado posterior, para garantizar un conjunto saludable y limpio.</p>

		    					<p><strong>Cumplimiento estricto</strong>: Debe quedar al menos un 40% de pestañas para que se considere un relleno. Cualquier cantidad menor se considera un conjunto completo y se cobrará un precio de conjunto completo.</p>

		    					<p><strong>Tenga en cuenta: No aceptamos nuevos clientes para rellenos externos y puede ser necesario un servicio de eliminación antes de aplicar un nuevo conjunto completo.</strong></p>
		    				</div>
		    			</div>
		    		</div>
			  	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
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
		    					<h3>Conjunto Completo de Volumen</h3>
		    					<p style="font-weight: bold; font-size:20px;">$190 (2:45min)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Las extensiones de pestañas con volumen, son una técnica de aplicación avanzada que da como resultado un efecto más dramático. Cada abanico hecho a mano se crea aplicando de 3 a 6 extensiones (más delgadas en diámetro) una a una y a cada pestaña natural. Las pestañas con volumen, son perfectas para los clientes que naturalmente tienen pestañas delgadas y escasas y quieren una apariencia más atrevida, o para aquellos que naturalmente tienen pestañas saludables pero que aún buscan crear un estilo alargado y glamoroso.</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Relleno de Volumen</h3>
		    					<p style="font-weight: bold; font-size:20px;">2 semanas $75 - 3 semanas $85</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Se requieren rellenos de volumen cada 2 ó 3 semanas, es muy importante seguir las instrucciones de cuidado posterior para garantizar un conjunto saludable y limpio.</p>

		    					<p><strong>Cumplimiento estricto</strong>: Debe quedar al menos un 40% de pestañas para que se considere un relleno. Cualquier cantidad menor se considera un conjunto completo y se cobrará un precio de conjunto completo.</p>

		    					<p><strong>Tenga en cuenta: No aceptamos nuevos clientes para rellenos externos, y puede ser necesario un servicio de eliminación antes de aplicar un nuevo conjunto completo</strong></p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Eliminación de Pestañas</h3>
		    					<p style="font-weight: bold; font-size:20px;">$25 (30min)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Si ha decidido tomar un descanso de las pestañas, puede quitarlas en lugar de esperar a que se caigan todas.</p>

		    					<p>La eliminación de pestañas toma entre 10 y 30 minutos, dependiendo de cuántas extensiones de pestañas te queden. Se aplica un removedor de pegamento especial para quitar las extensiones. Las remociones de pestañas externas son bienvenidas.</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Levantamiento de Pestañas</h3>
		    					<p style="font-weight: bold; font-size:20px;">$95 (1 hora)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>El levantamiento de pestañas es una técnica semipermanente que levanta las pestañas desde la raíz y le da un aspecto más largo, más completo y más grueso. ¡Podría durar hasta 8 semanas! Si te encantan las pestañas largas pero no estás seguro de las extensiones, ¡este servicio es perfecto para ti!. Sus resultados serán más dramáticos si sus pestañas naturales son saludables y de longitud media a larga. También puede agregar un tinte de pestañas para que sus pestañas se vean más oscuras</p>
		    				</div>
		    			</div>
		    		</div>
			  	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
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
              <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
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
                      Servicios de Maquillaje Permanente
                    </h3>
                    <p>
                      ¡Hablemos de cejas! Todos hemos pasado la mayor parte de nuestras vidas depilando con pinzas, depilando con cera, enhebrando, rellenando, dibujando, ocultando cicatrices y tratando de lograr ese arco perfecto o esa forma perfecta en nuestras cejas.

                    </p>
                    <p>
                      Hay muchos factores que pueden afectar el crecimiento del vello de nuestras cejas, incluida la edad, el exceso de depilación, las cicatrices, la quimioterapia, la alopecia, etc.
                    </p>
                    <p>
                      Elegir Microblading solo o hacer un combo de cejas, depende de lo que deseas alcanzar.
                    </p>
                    <p>
                      Si solo deseas crear una apariencia de trazo de cabello con luz natural, entonces Microblading solo es el camino a seguir. El Microblading por sí solo, no logrará una "apariencia de maquillaje", está destinado únicamente a crear "pequeños pelos", pero también le brinda la capacidad de agregar maquillaje para una apariencia más impactante. Si lo que buscas es un "look de maquillaje" más oscuro, más completo, lo que estás buscando es una combinación de cejas.
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
                                     <h3>Microblanding
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".microblading-m"><span>Haz una Cita</span></a>
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
                                     <a class="btn-ste" data-toggle="modal" data-target=".powder-m"><span>Haz una Cita</span></a>
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
                                     <a class="btn-ste" data-toggle="modal" data-target=".combo-m"><span>Haz una Cita</span></a>
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
			  	  				<p>Microblading es un servicio de tatuaje de cejas semipermanente, que dura entre 1 y 3 años dependiendo de tu tipo de piel y estilo de vida, después de su retoque de 6 a 10 semanas. Microblading se realiza con una herramienta manual diseñada para crear trazos finos, parecidos a un cabello, para una apariencia natural. Microblading es ideal para rellenar áreas dispersas de la ceja, definiendo y mejorando la forma de la misma.</p>

			  	  				<p>El Microblading es similar a hacerse un tatuaje en el cuerpo, pero no es tan profundo. Los tatuajes son permanentes porque van a la dermis, mientras que el microblading va a la epidermis. Esta es la razón por la que no se decolora si se hace correctamente, y dura unos años y no toda la vida.</p>

			  	  				<p>La forma y el color de las cejas están hechos a la medida de su estructura facial y preferencia; con la última técnica hiperrealista, podemos lograr un aspecto muy natural y suave. Solo utilizamos pigmentos veganos / libres de crueldad animal de la más alta calidad, así como herramientas estérilizadas desechables.</p>

			  	  				<p>● Resultados realistas naturales</p>

			  	  				<p>● Ideal para piel normal / seca</p>

			  	  				<p>● NO es ideal para pieles extremadamente grasas y gruesas con poros dilatados</p>

			  	  				<p>● NO es ideal para cejas muy dispersas</p>

			  	  				<h3 class="my-4">Beneficios del Microblading </h3>

			  	  				<p>Cualquiera que se beneficie del lápiz de cejas podría ser candidato para el microblading.</p>

			  	  				<p>Angella Marselo Reviwe: Tengo mis cejas tatuadas. En solo 2 horas, pasé de tener cero cejas a tener arcos suaves y de apariencia natural. Me sentí renacida, como si mis cejas hubieran sido bautizadas, y nunca volverían a ser las mismas (bueno, durante el próximo año o dos).</p>

			  	  				<h3 class="my-4">Cómo prepararse para el Microblading</h3>

			  	  				<p>Aproximadamente una semana antes de su cita de microblading, espera a depilarse, enhebrar o depilar las cejas. Un día antes, debes evitar el alcohol y la cafeína, ya que pueden aumentar la sensibilidad de la piel. Además, evita tomar ibuprofeno, aspirina, aceite de pescado o suplementos de vitamina E y otros anticoagulantes. Y no olvidemos: Trata de relajarte.</p>

			  	  				<h3 class="my-4">Qué esperar durante una cita de Microblading:</h3>
			  	  				<h4 class="mb-4">Paso 1: Anestesiamos tus cejas</h4>

			  	  				<p>Muchos clientes nos preguntan: "¿Duele?" La respuesta es: ¡no! La mayoría de los clientes no se quejan de ningún dolor, ¡y algunos incluso se quedan dormidos durante el proceso! Antes del procedimiento, aplicamos un anestésico tópico y esperamos 20 minutos para asegurarnos de que sientas la menor molestia posible. Puedes sentarte, relajarte y soñar con tener cejas en la ducha ... ¡porque todo está sucediendo!</p>

			  	  				<h4 class="my-4">Paso 2: Te entrevistamos</h4>

			  	  				<p>Después de adormecerte las cejas, te entrevistaremos sobre tu rutina de maquillaje y tu estilo de vida. ¿Dibujas tus cejas todos los días o solo en ocasiones especiales? ¿Te gustan las cejas llamativas y atrevidas o las cejas suaves y sutiles? Muchos clientes han depilado demasiado en el pasado y quieren volver a su aspecto característico. Durante la entrevista, trabajaremos contigo para personalizar tu mejor ceja.</p>

			  	  				<h4 class="my-4">Paso 3: Dibujamos tus mejores cejas</h4>

			  	  				<p>Una vez que determinemos tus mejores cejas, dibujaremos tus nuevas cejas directamente en tu cara. Durante este paso, te pediremos que sonrías, rías y hagas diferentes expresiones faciales. Nuestro objetivo es crear hermosas cejas que combinen con la simetría de tu rostro. Te ayudaremos a encontrar el color y la forma perfectos para tu rostro.</p>

			  	  				<h4 class="my-4">Paso 4: Comienza el procedimiento</h4>

			  	  				<p>Una vez que tus cejas estén adormecidas, comenzamos el tratamiento. Esto toma aproximadamente una hora.</p>

			  	  				<h4 class="my-4">Paso 5: Revelamos tus Nuevas Cejas</h4>

			  	  				<p>¡Y finalmente, la gran revelación! ¡Este es el comienzo de una hermosa relación entre tú y tus cejas! No más mantenimiento matutino estresante. No más cejas en tu almohada. ¡Cejas perfectas todos los días, llueva o haga sol!</p>

			  	  			</div>
			  	  		</div>
			  	  	</div>
		    	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
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
			  	  				<h3 class="my-4">Cejas con Polvo</h3>

			  	  				<p>Las cejas en polvo, es una técnica de maquillaje cosmético semipermanente diseñada para crear cejas con efecto de polvo suave, muy similar al maquillaje en polvo. El efecto de polvo se realiza con una técnica de sombreado, utilizando un dispositivo de maquillaje permanente, que es similar a una pistola de tatuaje. Da una gran definición y profundidad a las cejas. Está especialmente recomendado para mujeres con piel grasa o mixta o cualquier persona que se rellene las cejas regularmente con lápiz o sombra.</p>

			  	  				<p>● Ideal para pieles grasas y todo tipo</p>

			  	  				<p>● Puede ser suave o en negrita según la preferencia.</p>

			  	  				<p>● Maquillaje-look </p>

			  	  				<p>● De larga duración</p>

			  	  				<p>● Técnica de tendencia</p>

			  	  				<h3 class="my-4">¿Cuál es la diferencia entre Ombre Powder Brows y Microblading?</h3>

			  	  				<p>La mayor diferencia entre estas dos técnicas de peinado de cejas semipermanentes, es cómo se deposita el pigmento en la piel. Microblading utiliza una herramienta de mano para tallar pequeños cortes en la piel, mientras que las cejas Ombre se realizan con una máquina. La técnica del polvo ombre es un poco menos invasiva que la del microblading.</p>

			  	  				<h3 class="my-4">¿Cuánto tiempo duran las cejas Ombre?</h3>

			  	  				<p>Las cejas Ombre pueden durar de dos a cinco años. La duración dependerá de una serie de factores, como el estilo de vida, el tipo de piel, la exposición al sol, el estado de salud, etc.</p>

			  	  				<h3 class="my-4">¿Cuáles son los principales beneficios de las cejas en polvo Ombre?</h3>

			  	  				<p>● Las cejas en polvo Ombre son ideales para cualquier tipo de piel, a diferencia del microblading, que puede no funcionar bien en las bellezas de piel grasa.</p>

			  	  				<p>● Su ceja se verá más llena, más definida y llamativa.</p>

			  	  				<p>● Las cejas Ombre duran más que las cejas tatuadas, por lo general hasta 5 años.</p>

			  	  				<p>● La técnica del polvo ombre es un poco menos invasiva que la del Microblading.</p>

			  	  				<p>● Además, esta técnica de peinado de cejas semipermanente es menos dolorosa que la del Microblading.</p>

			  	  				<h3 class="my-4">¿Quién es un buen candidato para las Cejas Ombre?</h3>

			  	  				<P>A diferencia de Microblading, las cejas en polvo Ombre son ideales para cualquier tipo de piel. Las bellezas de piel grasa y las clientas de cabello muy oscuro son las que más se benefician de Ombre Powder Brows.</P>
			  	  			</div>
			  	  		</div>
			  	  	</div>
		    	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
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

			  	  				<p>Microshading es un servicio de tatuaje de cejas semipermanente, que dura entre 1 y 3 años dependiendo de tu tipo de piel y estilo de vida, después de su retoque de 6 a 10 semanas. El microshading es una combinación de técnica manual en la que cortamos trazos de cabello individuales y sombreado manual o automático donde rellenamos los espacios. El microshading se denomina a menudo "cejas combinadas" porque combinamos las dos técnicas.</p>

			  	  				<p>El Microshading es similar a hacerse un tatuaje en el cuerpo, pero no es tan profundo.Los tatuajes son permanentes porque van a la dermis, mientras que el micro sombreado va a la epidermis. Esta es la razón por la que no se decolora si se hace correctamente, y dura unos años y no toda la vida.</p>

			  	  				<h3 class="my-4">¿Quién es el cliente ideal?</h3>

			  	  				<p>● Cualquiera que busque un estilo de cejas completo </p>

			  	  				<p>● Cualquiera con poco o ningún cabello </p>

			  	  				<p>● Todo tipo de piel, especialmente grasa</p>

			  	  				<p>● Viejo encubrimiento de maquillaje permanente (debe consultar el libro para repasar los objetivos realistas)</p>

			  	  				<p>La experiencia de cada individuo variará según su tipo de piel y también su estilo de vida, pero es importante programar su consulta gratuita para analizar las preguntas y preocupaciones individuales.</p>

			  	  			</div>
			  	  		</div>
			  	  	</div>
		    	  </div>
			  	  <div class="modal-footer">
			  	    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
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
    					<h2 style="color:#cd7c78!important; font-size: 35px;">Reserva tu Cita Hoy</h2>
    				</div>
    				<div class="col-md-6 text-center">
    					<a href="contact_es.php"><button type="button" class="btn btn-ste" data-dismiss="modal">Contáctanos</button></a>
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
