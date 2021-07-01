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
    <title>Luna Beauty Studio - Cuidados y Preguntas Frecuentes</title>
</head>
<body class="light care-body">

<style>
  .care-body .nav-link p{
    color: white;
  }

  .care-body .cus-nav .nav-link p{
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
    	      background: url(library/img/lashes-our.jpg);
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
    	    <h1 class="text-center" style="color:#fff; font-size: 45px!important;">Cuidados y Preguntas Frecuentes</h1>
    	  </div>
    	</section>

        <section id="care-section" class="px-4 py-5">
            <style>
                #care-section .modal p{
                    color:black!important;
                }

                #care-section .btn-ste{
                    border:0!important;
                }

                #care-section .cbtn .btnhero {
                  border-radius: 15px;
                  display: inline-block;
                  text-align: center;
                  cursor: pointer;
                  font-size: 1.1rem;
                  line-height: 45px;
                  max-width: 230px;
                  position: relative;
                  text-decoration: none;
                  padding: 5px 15px;
                  text-transform: uppercase;
                  width: 230px;
                }
                @media (max-width: 991.98px) {
                  #care-section .cbtn .btnhero {
                    text-align: center;
                    max-width: initial;
                    width: 100%;
                  }
                }
                @media (max-width: 575.98px) {
                  #care-section .cbtn .btnhero {
                    width: 100%;
                    max-width: initial;
                  }
                }
                #care-section .cbtn .btnhero:hover {
                  text-decoration: none;
                }
                #care-section .cbtn .effect01 {
                  font-family: "Playfair Display", serif;
                  color: #6d6e70;
                  border: 4px solid #f5d1d0;
                  box-shadow: 0px 0px 0px 1px #cd7c78 inset;
                  background-color: #f7aba5;
                  overflow: hidden;
                  position: relative;
                  transition: all 0.3s ease-in-out;
                }
                #care-section .cbtn .effect01:hover {
                  border: 4px solid #cd7c78;
                  background-color: #F3DFDE;
                  box-shadow: 0px 0px 0px 4px #f5d1d0 inset;
                }
                #care-section .cbtn .effect01 span {
                  color:white;
                  transition: all 0.2s ease-out;
                  z-index: 2;
                }
                #care-section .cbtn .effect01:hover span {
                  color: #6d6e70;
                }
                #care-section .cbtn .effect01:after {
                  background: #FFF;
                  border: 0px solid #cd7c78;
                  content: "";
                  height: 155px;
                  left: -75px;
                  opacity: 0.8;
                  position: absolute;
                  top: -50px;
                  -webkit-transform: rotate(35deg);
                  transform: rotate(35deg);
                  width: 50px;
                  transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);
                  z-index: 1;
                }
                #care-section .cbtn .effect01:hover:after {
                  background: #FFF;
                  border: 20px solid #cd7c78;
                  opacity: 0;
                  left: 120%;
                  -webkit-transform: rotate(40deg);
                  transform: rotate(40deg);

            </style>
            <div class="container py-2">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-3" style="color:#cd7c78!important; font-size: 30px;">Cuidados</h2>
                        <p>Para que su nueva permanente se cure correctamente, estas instrucciones de cuidados previos que se encuentran a continuación son de suma importancia. Las instrucciones de cuidado previo están destinadas a limitar el sangrado y la sensibilidad de la piel durante el servicio. ¡El sangrado excesivo durante el procedimiento diluirá el color del pigmento y producirá malos resultados!</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".pre-m"><span style="margin: 0;">PMU Pre-Cuidados</span></button></div>
                    </div>
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".post-m"><span style="margin: 0;">PMU Post-Cuidados</span></button></div>
                    </div>
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".after-m"><span style="margin: 0;">PMU Post-Sanación</span></button></div>
                    </div>
                </div>
            </div>

            <div class="modal fade pre-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="row">
                  <div class="col-12 text-center">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <p>● NO consumir alcohol ni cafeína 48 horas antes del procedimiento (¡Sí, hay cafeína en el café y té descafeinado!).</p>

                                <p>● Evite el sol y el bronceado en su cara dos semanas antes del procedimiento.</p>

                                <p>● No tome aspirina, niacina, vitamina E o Advil / ibuprofeno 48 horas antes del procedimiento.</p>

                                <p>● Evite el aceite de pescado, las vitaminas prenatales, los batidos nutricionales (Shakeology, etc.), los suplementos de “Cabello, piel, uñas” dos semanas antes del procedimiento.</p>

                                <p>● Suspenda el Retin-A, las exfoliaciones químicas y láser, las microdermoabrasiones, el alfahidroxiácido (AHA) y cualquier exfoliante químico o cuidado de la piel "iluminante" al menos 6 semanas antes (una vez que sus cejas se hayan curado, debe evitar el uso de estos productos en la frente). procedimiento de área para evitar la decoloración prematura).</p>

                                <p>● El Botox y el relleno en la frente, la sien y el área de los ojos deben evitarse 4 SEMANAS antes del procedimiento para aquellos que no reciben inyectables con regularidad.</p>

                                <p>● Evite las siguientes hierbas y especias 48 horas antes del procedimiento: jengibre, canela, ajo, pimienta negra y cayena.</p>

                                <p>● No se debe depilar, teñir ni enhebrar las cejas una semana antes (¡cuanto más crecimiento natural del cabello tenga, mejor!</p>

                                <p>● Tenga en cuenta: será más sensible durante su ciclo menstrual.</p>

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


            <div class="modal fade post-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="row">
                  <div class="col-12 text-center">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <p>● Mantenga limpia el área de las cejas con agua y un gel limpiador sin perfume. Las manos deben estar recién limpias. Evite el uso de paños o esponjas abrasivas.</p>

                                <p>● Deje que el área se seque completamente antes de aplicar el ungüento (seque con una toalla de papel o al aire).</p>

                                <p>● Una vez que esté completamente seco, aplique una fina capa de ungüento (cantidad del tamaño de arroz).</p>

                                <p>● Repita los pasos anteriores dos veces al día durante 7 días después del servicio.</p>

                                <p>● NO frote, pellizque ni raye el área tratada. Deje que cualquier piel seca o con costras se exfolie naturalmente. ¡El pinchazo puede causar cicatrices y pérdida de pigmento!</p>

                                <p>● Evite la exposición directa al sol y las camas solares durante un mínimo de 4 semanas después de su procedimiento. La luz solar directa puede hacer que el pigmento cambie de color mientras se cura y también puede causar hiperpigmentación y cicatrices.</p>

                                <p>● Evite la piscina, sauna, baños de vapor, duchas calientes y / o baños calientes durante 10 días.</p>

                                <p>● Evite sudar en la cara durante 10 días. El sudor a través o en las cejas expulsará el pigmento de la dermis produciendo malos resultados.</p>

                                <p>● Evite dormir sobre su cara / cejas durante los primeros 10 días.</p>

                                <p>● Mantenga el flequillo y el cabello recogidos de la cara durante los primeros 10 días.</p>

                                <p>● NO usar maquillaje o productos para el cuidado de la piel en el área tratada durante 10 días.</p>

                                <p>● Después de 10 días, una vez que el área haya sanado por completo, considere usar bloqueador solar cuando salga al sol para evitar que el color se desvanezca.</p>

                                <p>● El tinte de cejas no debe realizarse durante 2 semanas después de su procedimiento.</p>

                                <p>● Evite el Retin-A, los peelings químicos, los tratamientos con láser, las microdermoabrasiones y / o cualquier cosa para tratar la hiperpigmentación alrededor del área de la ceja una vez curada para evitar la decoloración del tatuaje de la frente.</p>

                                <p>● Informe a su técnico de resonancia magnética que se ha hecho un tatuaje.</p>

                                <p class="mt-5">Tenga en cuenta: el área aparecerá más oscura, más audaz y más nítida debido a la formación de costras y la cicatrización natural durante la primera semana. Esto es muy común para todos los procedimientos cosméticos permanentes.</p>

                                <p>Descargo de Responsabilidad: Tenemos el derecho de negar el servicio a los clientes que tengan las siguientes condiciones.</p>

                                <p class="mb-5">Si tiene alguna de las siguientes condiciones, comuníquese con nosotros inmediatamente antes de programar para asegurarse de que es un candidato.</p>

                                <p>● Embarazada o lactante</p>

                                <p>● Diabético</p>

                                <p>● Infecciones y / o enfermedades virales</p>

                                <p>● Epilepsia</p>

                                <p>● Un Marcapasos o problemas cardíacos importantes</p>

                                <p>● Tuvo un trasplante de órgano</p>

                                <p>● Tendencia a queloides o cicatrices</p>

                                <p>● Dermatitis seborreica</p>

                                <p>● Irritaciones de la piel o psoriasis cerca del área tratada (erupciones, quemaduras solares, acné, etc.)</p>

                                <p>● Enfermo (resfriado, gripe, etc.)</p>

                                <p>● Recibió Botox en los últimos 2 meses</p>

                                <p>● Usó Accutane el año pasado</p>

                                <p>● Alérgico a los anestésicos (lidocaína)</p>

                                <p>● Piel extremadamente grasa o problemática</p>

                                <p class="mt-5">Las afecciones diagnosticadas que no se aplican deben traer una nota del médico que indique su aprobación.</p>

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

            <div class="modal fade after-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="row">
                  <div class="col-12 text-center">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <p>● La exposición al sol y las camas de bronceado puede provocar la decoloración y decoloración del pigmento.</p>

                                <p>● Aplique siempre protector solar (50 SPF o más) en el área de las cejas una vez que estén completamente curadas.</p>

                                <p>● Mantenga la eliminación del vello de la frente no deseado fuera del diseño de su ceja tatuada mediante pinzas, enhebrado, depilación o afeitado.</p>

                                <p>● No aplique láser alrededor del área de la frente (IPL). Algunos láseres pueden cambiar el color del pigmento.</p>

                                <p>● Es posible que aún se requiera una aplicación adicional de maquillaje de cejas después del tatuaje para lograr el aspecto deseado.</p>

                                <p>● Para mayor protección solar, use sombreros y gafas de sol.</p>

                                <p>● Se recomiendan retoques anuales para mantener sus resultados.</p>

                                <p>● Evite el uso de exfoliantes químicos para la piel en las cejas y el área de la frente. El uso de estos productos provocará una decoloración prematura y la decoloración del tatuaje. Los ejemplos pueden incluir, pero no se limitan a: ácido glicólico, hidroquinona, retinol, retin A, vitamina C, "peelings" o "abrillantadores".</p>

                                <p>● Debe evitarse cualquier servicio o producto utilizado para tratar la hiperpigmentación en la zona de la frente y los ojos.</p>

                                <p class="mt-5"><strong>No cuidar adecuadamente su tatuaje cosmético puede resultar en que su artista rechace futuros servicios / retoques</strong></p>

                                <p><strong>ATENCIÓN POR FAVOR: RECOMENDAMOS ENCARECIDAMENTE A LOS POSIBLES NUEVOS CLIENTES QUE RESERVEN SU CITA DE MICROBLADING AL MENOS 3-4 MESES ANTES DE LAS VACACIONES, BODAS Y OCASIONES ESPECIALES. ESTO PERMITE UN TIEMPO ADECUADO PARA LA CURACIÓN.</strong></p>
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

        <section id="faq-section" class="p-4">
            <style>
                #faq-section{
                    background: radial-gradient(219% 100%,white,#f7aba5);
                }

                #faq-section .card{
                    margin-bottom: 14px;
                }

                #faq-section .card h3{
                    font-family: 'Playfair Display';
                    font-weight: normal!important;
                    font-size: 17px!important;
                    text-align: left;
                }

                #faq-section .card h4{
                    font-family: 'Playfair Display';
                }

                #faq-section .card-header{
                    background: #f7aba5;
                }
            </style>

            <div class="container">
            <div class="row align-items-center">

                <div class="col-12 text-center my-3"><h2 style="color:#6d6e70!important; font-size: 30px;">PF</h2></div>

                <div class="col-12 px-4">
                    <div id="accordion">


                      <div class="card">
                        <div class="card-header btn" id="what-is" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <h3 class="my-3" style="color:white;">¿Qué es Microblading?</h3>
                        </div>

                        <div id="collapse1" class="collapse" aria-labelledby="what-is" data-parent="#accordion">
                          <div class="card-body">
                            <p>El microblading es un procedimiento semipermanente, en el que dibujamos manualmente trazos finos como un cabello con una herramienta de mano. Mojamos la hoja en pigmento, que luego se deposita debajo de la capa superior de piel. ¡El microblading le permite a alguien mejorar, corregir e incluso reconstruir sus cejas! ¡El procedimiento deja tus cejas con un aspecto natural, con forma y hermoso!</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <h3 class="my-3" style="color:white;">¿Parece cabello real?</h3>
                        </div>

                        <div id="collapse2" class="collapse" aria-labelledby="does" data-parent="#accordion">
                          <div class="card-body">
                            <p>¡Absolutamente! La hoja pequeña utilizada deja líneas finas y nítidas que imitan la apariencia de los pelos de las cejas reales. La forma en que se dibujan les da una apariencia realista en 3D.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-price" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <h3 class="my-3" style="color:white;">¿Cuál es el precio?</h3>
                        </div>

                        <div id="collapse3" class="collapse" aria-labelledby="what-price" data-parent="#accordion">
                          <div class="card-body">
                            <p>Puedes leer más información sobre el costo en la Sección de Servicios</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-long" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <h3 class="my-3" style="color:white;">¿Cuánto dura la cita / sesión?</h3>
                        </div>

                        <div id="collapse4" class="collapse" aria-labelledby="how-long" data-parent="#accordion">
                          <div class="card-body">
                            <p>El horario de la cita puede variar, pero una cita típica durará entre 2 y 3 horas. Durante la cita inicial hay una consulta, tiempo para adormecer el área y dibujar formas de cejas además del procedimiento. La sesión de retoque complementaria no tomará tanto tiempo, ya que retocaremos el color, la forma y los trazos del cabello.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-should" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <h3 class="my-3" style="color:white;">¿Cómo debo prepararme para mi cita?</h3>
                        </div>

                        <div id="collapse5" class="collapse" aria-labelledby="how-should" data-parent="#accordion">
                          <div class="card-body">
                            <p>Primero, reserve su cita y pague el depósito para guardar la fecha y hora de su cita. Puede leer más sobre la preparación aquí. Traiga $ 5 en efectivo si desea comprar un kit de curación.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-does" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <h3 class="my-3" style="color:white;">¿Cuánto tiempo se tarda en sanar?</h3>
                        </div>

                        <div id="collapse6" class="collapse" aria-labelledby="how-does" data-parent="#accordion">
                          <div class="card-body">
                            <p>Debido a que los cuerpos de todos funcionan y se curan de manera diferente, el período de curación variará. La buena noticia es que no hay tiempo de inactividad. Deberá evitar la luz solar directa, mojarlas, hacer ejercicio extenuante y maquillarse las cejas o alrededor de ellas durante al menos 7 a 10 días. Puede experimentar una fase de descamación durante el proceso de curación durante un breve período de tiempo.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-aftercare" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <h3 class="my-3" style="color:white;">¿Qué es el cuidado posterior?</h3>
                        </div>

                        <div id="collapse7" class="collapse" aria-labelledby="what-aftercare" data-parent="#accordion">
                          <div class="card-body">
                            <p>Saldrá de su cita bien informado sobre los procedimientos de cuidados posteriores y tendrá una página de cuidados posteriores para llevar a casa. Algunas partes importantes del cuidado posterior son evitar la luz solar directa mientras sus cejas se curan, mojarlas, hacer ejercicio extenuante que provoque sudoración y maquillarse cerca de las cejas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="can-get" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            <h3 class="my-3" style="color:white;">¿Puedo obtener Microblading durante el embarazo?</h3>
                        </div>

                        <div id="collapse8" class="collapse" aria-labelledby="can-get" data-parent="#accordion">
                          <div class="card-body">
                            <p>Lamentablemente no. Le recomiendo que espere al menos 2 meses después de haber dado a luz.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="am-good" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            <h3 class="my-3" style="color:white;">¿Soy un buen candidato para Microblading?</h3>
                        </div>

                        <div id="collapse9" class="collapse" aria-labelledby="am-good" data-parent="#accordion">
                          <div class="card-body">
                            <p>Si está embarazada o amamantando, si tiene diabetes, glaucoma, enfermedades de la piel como herpes zóster, psoriasis o eccema en el área de tratamiento, alergias al maquillaje, trastorno queloide, VIH / hepatitis, cáncer de piel, hemofilia o si está tomando medicamentos para la piel como ro-accutaína y esteroides.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does-microblading" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <h3 class="my-3" style="color:white;">¿Microblading duele?</h3>
                        </div>

                        <div id="collapse10" class="collapse" aria-labelledby="does-microblading" data-parent="#accordion">
                          <div class="card-body">
                            <p>En el estudio se aplica un ungüento anestésico tópico para ayudar a reducir el dolor potencial de Microblading.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-have" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                            <h3 class="my-3" style="color:white;">¿Tengo que afeitarme las cejas?</h3>
                        </div>

                        <div id="collapse11" class="collapse" aria-labelledby="do-have" data-parent="#accordion">
                          <div class="card-body">
                            <p>De ningún modo. Trazamos la forma en función de la estructura facial, las cejas actuales y la simetría del rostro del cliente. Se eliminará cualquier vello no deseado que no se desee en la nueva apariencia de cejas. Por favor, no se afeite las cejas, eso nunca se recomienda.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-last" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            <h3 class="my-3" style="color:white;">¿Cuánto dura el Microblading?</h3>
                        </div>

                        <div id="collapse12" class="collapse" aria-labelledby="how-last" data-parent="#accordion">
                          <div class="card-body">
                            <p>El microblading puede durar mientras el cliente lo mantenga. En promedio, puede durar de 1 a 3 años según el cliente y la atención.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="i-have" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                            <h3 class="my-3" style="color:white;">Otro artista me hizo Microblading. ¿Cuánto cuesta hacerme las cejas?</h3>
                        </div>

                        <div id="collapse13" class="collapse" aria-labelledby="i-have" data-parent="#accordion">
                          <div class="card-body">
                            <p>Todos los nuevos clientes de Luna Beauty Studio pagan el costo del nuevo cliente. Su tarifa incluye una sesión de retoque de 5-8 semanas. Una vez que un cliente ha pagado el costo inicial, recibe un descuento significativo para todos los retoques futuros siempre que se mantengan las cejas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-schedule" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            <h3 class="my-3" style="color:white;">¿Cómo programo una cita?</h3>
                        </div>

                        <div id="collapse14" class="collapse" aria-labelledby="how-schedule" data-parent="#accordion">
                          <div class="card-body">
                            <p>Puede programar una cita haciendo click en 'Haz una Cita' o enviar un mensaje de texto al 786-613-9798.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does-work" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            <h3 class="my-3" style="color:white;">¿Funciona Microblading en todos los tonos y tipos de piel?</h3>
                        </div>

                        <div id="collapse15" class="collapse" aria-labelledby="does-work" data-parent="#accordion">
                          <div class="card-body">
                            <p>Sí, podemos realizar microblading en todos los tonos de piel. Podemos hacerlo en la mayoría de los tipos de piel, pero si tiene la piel muy grasa, es posible que desee considerar otra opción, ya que es una combinación de cejas, relleno de polvo o sombreado. Podemos discutir opciones.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="clients-who" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                            <h3 class="my-3" style="color:white;">Cliente que NO es candidato:</h3>
                        </div>

                        <div id="collapse16" class="collapse" aria-labelledby="clients-who" data-parent="#accordion">
                          <div class="card-body">
                            <p>● Mujeres embarazadas o en período de lactancia</p>

                            <p>● Clientes propensos a los queloides</p>

                            <p>● Clientes que actualmente usan Accutane o Retin A</p>

                            <p>● Clientes que actualmente reciben quimioterapia</p>

                            <p>● Clientes que toman anticoagulantes</p>

                            <p>● Clientes que son diabéticos</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-lip" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                            <h3 class="my-3" style="color:white;">¿Qué es el rubor de labios?</h3>
                        </div>

                        <div id="collapse17" class="collapse" aria-labelledby="what-lip" data-parent="#accordion">
                          <div class="card-body">
                            <p>El rubor de labios es una forma de tatuaje cosmético semipermanente que realza el tinte y la forma naturales de los labios, dándoles un impulso y un toque brillante. Está diseñado para definir y delinear tus labios, no para hacerlos más llenos. Da la ilusión de que están más llenos, pero de una manera muy natural. ¡Es más o menos como un microblading para tus labios!</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-cost" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                            <h3 class="my-3" style="color:white;">¿Cuánto cuesta el tatuaje de Labios?</h3>
                        </div>

                        <div id="collapse18" class="collapse" aria-labelledby="how-cost" data-parent="#accordion">
                          <div class="card-body">
                            <p>El rubor de labios suele costar entre 350 y 500 dólares, incluido el retoque.</p>

                            <p>Recuerde que el rubor de labios es un servicio cosmético que requiere habilidades técnicas y solo debe confiar en profesionales completamente capacitados para tales procedimientos. Esto tiene un costo, pero debes poner tu cuerpo en manos de alguien en quien confíes.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-longdoes" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                            <h3 class="my-3" style="color:white;">¿Cuánto dura el rubor de labios?</h3>
                        </div>

                        <div id="collapse19" class="collapse" aria-labelledby="how-longdoes" data-parent="#accordion">
                          <div class="card-body">
                            <p>Entre 2 y 5 años, dependiendo de qué tan cuidadosamente sigas las instrucciones de postratamiento y cuántas sesiones de retoques tengas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-blushing" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                            <h3 class="my-3" style="color:white;">¿Cuánto tiempo dura el rubor de labios?</h3>
                        </div>

                        <div id="collapse20" class="collapse" aria-labelledby="how-blushing" data-parent="#accordion">
                          <div class="card-body">
                            <p>Una sesión de tatuaje de labios dura aproximadamente 2 horas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-tattooing" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                            <h3 class="my-3" style="color:white;">¿Cuánto tiempo tardan en curarse los tatuajes con tinte de labios?</h3>
                        </div>

                        <div id="collapse21" class="collapse" aria-labelledby="how-tattooing" data-parent="#accordion">
                          <div class="card-body">
                            <p>Una sesión de tatuaje de labios dura aproximadamente 2 horas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-expect" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                            <h3 class="my-3" style="color:white;">¿Qué esperar en su cita?</h3>
                        </div>

                        <div id="collapse22" class="collapse" aria-labelledby="what-expect" data-parent="#accordion">
                          <div class="card-body">
                            <p>Dile adiós al dibujo en tus labios cada mañana. Saluda al puchero sin esfuerzo.</p>

                            <h4>Paso 1: Adormecemos tus labios</h4>

                            <p>Muchos clientes nos preguntan: "¿Duele?" La respuesta es: ¡pago mínimo a leve! Antes de Lip Blush, aplicamos un anestésico tópico y esperamos 30 minutos para asegurarnos de que sienta la menor molestia posible.</p>

                            <h4>Paso 2: ¡Te entrevistamos!</h4>

                            <p>Durante la entrevista, trabajaremos contigo para personalizar tu mejor puchero, que cambiará tu rutina de maquillaje durante 3-5 años. Te preguntaremos sobre tu rutina y estilo de maquillaje. ¿Usas lápiz labial en tus labios todos los días o solo en ocasiones especiales? ¿Eras lápiz labial de cobertura completa o simplemente brillo labial?</p>

                            <p>¡Solo queremos asegurarnos de lograr el aspecto que deseas!</p>

                            <h4>Paso 3: Dibujamos tu mejor forma de labios</h4>

                            <p>Nuestro objetivo es crear hermosos labios que combinen con la simetría de tu rostro. Te ayudaremos a encontrar el color y la forma perfectos para tu rostro. Una vez que determinemos su mejor forma, dibujaremos su nuevo labio directamente en su cara.</p>

                            <h4>Paso 4: comienza el tratamiento de labios</h4>

                            <p>Una vez que sus labios estén adormecidos, comenzamos el proceso de creación de sus nuevos labios. El arte del rubor de labios es superponer los píxeles a la perfección sin que parezcan densos u oscuros. Es por eso que crear rubor de labios es una forma de arte y requiere personas profesionales para realizar este servicio.</p>

                            <h4>Paso 5: Revelamos tus nuevos labios</h4>

                            <p>¡Y finalmente, la gran revelación! Después de que tus labios estén terminados. No más mantenimiento matutino estresante. No más lápiz labial manchado en tu taza de café. Labios perfectos todos los días, llueva o haga sol, solo agrega un poco de brillo labial y listo.</p>

                            <p>Se recomienda un retoque gratuito después de 6 a 8 semanas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-dont" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                            <h3 class="my-3" style="color:white;">¿Qué hacer y qué no hacer antes de una cita de rubor de labios?</h3>
                        </div>

                        <div id="collapse23" class="collapse" aria-labelledby="do-dont" data-parent="#accordion">
                          <div class="card-body">
                            <p><strong>HACER</strong>: Lleva fotos / lápices labiales para mostrarle a tu tatuador cosmético el color que deseas. Tome una tableta preventiva el día de la cita si es propenso al herpes labial.</p>

                            <p><strong>LO QUE NO DEBE HACER</strong>: Consumir alcohol, cafeína, aceite de pescado, vitamina E, aspirina e ibuprofeno, ya que hacen que la sangre se adelgace y producirá más sangrado durante el procedimiento.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-dont2" data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                            <h3 class="my-3" style="color:white;">¿Qué hacer y qué no hacer después de una sesión de tatuaje Lip Blush?</h3>
                        </div>

                        <div id="collapse24" class="collapse" aria-labelledby="do-dont2" data-parent="#accordion">
                          <div class="card-body">
                            <p><strong>HACER</strong>: Use mucho bálsamo labial para mantener sus labios hidratados. Planifique una cita de seguimiento con su artista.</p>

                            <p><strong>LO QUE NO DEBE HACER</strong>: Recoger sus costras. ¡Nunca! Además, evite la exposición al sol y los entrenamientos durante aproximadamente 2 semanas. No ingiera comida picante en las 48 horas siguientes a la sesión.</p>

                            <p>¿Cuánto dura el lápiz labial cosmético permanente o el rubor de labios? ¿La pigmentación labial natural de una persona tiene algún efecto sobre esto?</p>

                            <p>Los resultados duran entre dos y cinco años (o más) antes de requerir una actualización de color. La elección del color es tan importante, y si no más importante, para un tatuaje de labios que para un tatuaje de cejas. Los tonos subyacentes de azul, violeta o marrón deben equilibrarse y, en ciertos casos, corregirse con el uso de colores como los pigmentos modificadores de naranja. Siempre se debe considerar el tono natural de los labios y el tono de la piel para lograr un color apropiado para ese cliente.</p>

                            <p>De forma similar a las técnicas de maquillaje normales, ¿existe algún método para contornear los labios de forma permanente para que parezcan más llenos?</p>

                            <p>Algunos técnicos pueden usar diferentes tonos de pigmentos para lograr una apariencia contorneada en los labios, pero yo elijo la técnica. Encuentro que la clave de la sutileza es aplicar el color de manera más densa en ciertas áreas de los labios para crear una apariencia de contorno natural, mezclándose con todo el labio. Como la piel de los labios retiene el pigmento de una manera diferente a la piel de la cara, es importante no trabajar demasiado fuera del borde del labio, sino trabajar con él para realzar el borde natural y agregar volumen.</p>
                          </div>
                        </div>
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
