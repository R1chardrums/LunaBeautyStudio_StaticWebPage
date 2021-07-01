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
    <title>Luna Beauty Studio - Care & FAQ</title>
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
    	    <h1 class="text-center" style="color:#fff; font-size: 45px!important;">Care & FAQ</h1>
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
                        <h2 class="mb-3" style="color:#cd7c78!important; font-size: 30px;">Care</h2>
                        <p>In order for your new permanent to heal properly these Pre-Care Instructions found below are of the utmost importance! Pre-Care instructions are meant to limit bleeding and skin sensitivities during the service. Excessive bleeding during the procedure will dilute the pigment color and lead to poor results!</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".pre-m"><span style="margin: 0;">PMU Pre-Care</span></button></div>
                    </div>
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".post-m"><span style="margin: 0;">PMU Post-Care</span></button></div>
                    </div>
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".after-m"><span style="margin: 0;">After You’ve Healed</span></button></div>
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

                                <p>● NO alcohol or caffeine 48 hours before procedure (Yes, there is caffeine in decaf coffee and tea!).</p>

                                <p>● Avoid sun and tanning on your face two weeks prior to procedure.</p>

                                <p>● Do not take Aspirin, Niacin, Vitamin E or Advil/Ibuprofen 48 hours before procedure.</p>

                                <p>● Avoid Fish Oil, Prenatal Vitamins, Nutritional Shakes (Shakeology, etc), “Hair, Skin, Nail” supplements two weeks prior to procedure.</p>

                                <p>● Discontinue Retin-A, Chemical and Laser Peels, Microdermabrasions, Alpha Hydroxy Acid (AHA), and any chemical exfoliant or “brightening” skincare at least 6 weeks prior (Once your brows have healed, you must avoid use of these products on forehead area procedure to prevent premature fading).</p>

                                <p>● Botox and filler on the forehead, temple, and eye area should be avoided 4 WEEKS prior to procedure for those who do not regularly receive injectables.</p>

                                <p>● Avoid the following herbs and spices 48 hours before procedure: ginger, cinnamon, garlic, black and cayenne pepper.</p>

                                <p>● No brow waxing, tinting, or threading one week prior (the more natural hair growth you have, the better!</p>

                                <p>● Please Note: You will be more sensitive during your menstrual cycle.</p>

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

                                <p>● Keep the brow area clean by using a fragrance-free gel cleanser and water. Hands must be freshly clean. Avoid use of abrasive washcloths or sponges.</p>

                                <p>● Allow area to completely dry before applying ointment (pay dry with paper towel or air dry).</p>

                                <p>● Once fully dry, apply a thin layer of ointment (rice size amount).</p>

                                <p>● Repeat above steps two times per day for 7 days after service.e.</p>

                                <p>● DO NOT rub, pick or scratch the treated area. Let any scabbing or dry skin naturally exfoliate off. Picking can cause scarring and pigment loss!</p>

                                <p>● Avoid direct sun exposure and tanning beds for a minimum of 4 weeks after your procedure. Direct sunlight can cause the pigment to change color while it is healing and can also cause hyper pigmentation and scarring.</p>

                                <p>● Avoid pool, sauna, steam rooms, hot showers and/or hot baths for 10 days.</p>

                                <p>● Avoid sweating on your face for 10 days. Sweating through or on the brows will expel pigment from the dermis producing poor results.</p>

                                <p>● Avoid sleeping on your face/brows for the first 10 days.</p>

                                <p>● Keep your bangs and hair pulled back from your face for the first 10 days.</p>

                                <p>● NO makeup or skincare products to be used on the treated area for 10 days.</p>

                                <p>● After 10 days, once the area has healed completely, consider using sunblock when going out in the sun to stop the color from fading.</p>

                                <p>● Eyebrow tinting should not be undertaken for 2 weeks after your procedure.</p>

                                <p>● Avoid Retin-A, Chemical Peels, Laser Treatments, Microdermabrasions, and/or anything to treat hyperpigmentation around the brow area once healed to prevent fading of your brow tattoo.</p>

                                <p>● Inform your MRI technician that you have had a tattoo.</p>

                                <p class="mt-5">Please note: Area will appear darker, bolder, and sharper due to natural scabbing and healing for the first week. This is very common for all permanent cosmetic procedures.</p>

                                <p>Disclaimer: We hold the right to deny service to clients who have the following conditions.</p>

                                <p class="mb-5">If you have any of the following conditions please contact us immediately before scheduling to ensure you are a candidate.</p>

                                <p>● Pregnant or Nursing</p>

                                <p>● Diabetic</p>

                                <p>● Viral infections and/or diseases</p>

                                <p>● Epilepsy</p>

                                <p>● A Pacemaker or major heart problems</p>

                                <p>● Had an Organ transplant</p>

                                <p>● Tendency towards keloids or scarring</p>

                                <p>● Seborrheic dermatitis</p>

                                <p>● Skin irritations or Psoriasis near the treated area (rashes, sunburn, acne, etc.)</p>

                                <p>● Sick (cold, flu, etc.)</p>

                                <p>● Had Botox in the past 2 months</p>

                                <p>● Used Accutane in the past year</p>

                                <p>● Allergic to anesthetic (Lidocaine)</p>

                                <p>● Extremely Oily or Problematic Skin</p>

                                <p class="mt-5">Diagnosed conditions that are waived are required to bring a doctor’s note stating their approval.</p>

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

                                <p>● Exposure to the sun and tanning beds can cause fading and discoloration of the pigment.</p>

                                <p>● Always apply sunscreen (50 SPF or greater) on brow area once completely healed.</p>

                                <p>● Maintain removal of unwanted brow hair outside of your tattooed brow design by tweezing, threading, waxing, or razoring.</p>

                                <p>● Do not do laser around your brow area (IPL). Some lasers may change the color of the pigment.</p>

                                <p>● Additional brow makeup application may still be required post tattoo to achieve your desired look.</p>

                                <p>● For further sun protection wear hats and sunglasses.</p>

                                <p>● Yearly touchups are recommended to maintain your results.</p>

                                <p>● Avoid using chemical skin exfoliants on the brows and forehead area. Use of these products will cause premature fading and tattoo discoloration. Examples may include but are not limited to: Glycolic Acid, Hydroquinone, Retinol, Retin A, Vitamin C, “peels” or “brightening.”</p>

                                <p>● Any service or product used to treat hyper pigmentation on the forehead and eye area should be avoided.</p>

                                <p class="mt-5"><strong>Failure to properly care for your cosmetic tattoo may result in your artist refusing future services/touch ups</strong></p>

                                <p><strong>ATTENTION PLEASE: WE STRONGLY ADVISE PROSPECTIVE NEW CLIENTS TO BOOK THEIR MICROBLADING APPOINTMENTS AT LEAST 3-4 MONTHS IN ADVANCE OF VACATIONS, WEDDINGS, AND SPECIAL OCCASIONS. THIS ALLOWS ADEQUATE TIME FOR HEALING.</strong></p>
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

                <div class="col-12 text-center my-3"><h2 style="color:#6d6e70!important; font-size: 30px;">FAQ</h2></div>

                <div class="col-12 px-4">
                    <div id="accordion">


                      <div class="card">
                        <div class="card-header btn" id="what-is" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <h3 class="my-3" style="color:white;">What is Microblading?</h3>
                        </div>

                        <div id="collapse1" class="collapse" aria-labelledby="what-is" data-parent="#accordion">
                          <div class="card-body">
                            <p>Microblading is a semi-permanent procedure, where we manually draw fine hair-like strokes with a handheld tool. We dip the blade into pigment, which is then deposited under the top layer of skin. Microblading allows someone to enhance, correct, and even reconstruct their eyebrows! The procedure leaves your brows looking natural, shaped, and beautiful!</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <h3 class="my-3" style="color:white;">Does it look like real hair?</h3>
                        </div>

                        <div id="collapse2" class="collapse" aria-labelledby="does" data-parent="#accordion">
                          <div class="card-body">
                            <p>Absolutely! The small blade used leaves fine, crisp lines that mimic the appearance of real eyebrow hairs! The way they are drawn on gives them a 3D lifelike appearance. </p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-price" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <h3 class="my-3" style="color:white;">What is the price?</h3>
                        </div>

                        <div id="collapse3" class="collapse" aria-labelledby="what-price" data-parent="#accordion">
                          <div class="card-body">
                            <p>You can read more information about the cost</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-long" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <h3 class="my-3" style="color:white;">How long is the appointment/session?</h3>
                        </div>

                        <div id="collapse4" class="collapse" aria-labelledby="how-long" data-parent="#accordion">
                          <div class="card-body">
                            <p>The appointment time can vary, but a typical appointment will last around 2-3 hours. During the initial appointment there is a consultation, time for numbing the area, and drawing eyebrow shapes in addition to the procedure. The complimentary touch-up session will not take as long, as we be touching up the color, shape, and hair strokes.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-should" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <h3 class="my-3" style="color:white;">How should I prepare for my appointment?</h3>
                        </div>

                        <div id="collapse5" class="collapse" aria-labelledby="how-should" data-parent="#accordion">
                          <div class="card-body">
                            <p>First, book your appointment and pay the deposit to save your appointment date and time. You can read more about preparation here. Bring $5 in cash if you would like to purchase a healing kit.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-does" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <h3 class="my-3" style="color:white;">How long does it take to heal?</h3>
                        </div>

                        <div id="collapse6" class="collapse" aria-labelledby="how-does" data-parent="#accordion">
                          <div class="card-body">
                            <p>Because everyone's bodies work and heal differently, the healing time frame will vary. The good news is, there is no down time! You will need to avoid direct sunlight, getting them wet, taking part in strenuous exercise, and applying makeup on or around your eyebrows for at least 7-10 days.You may experience a peeling phase during the healing process for a short amount of time.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-aftercare" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <h3 class="my-3" style="color:white;">What is the aftercare?</h3>
                        </div>

                        <div id="collapse7" class="collapse" aria-labelledby="what-aftercare" data-parent="#accordion">
                          <div class="card-body">
                            <p>You will leave your appointment well informed of the aftercare procedures and have an aftercare page to take home with you. Some important parts of aftercare is avoiding direct sunlight while your eyebrows are healing, getting them wet, strenuous exercise that leads to sweating, and makeup on our close to your eyebrows.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="can-get" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            <h3 class="my-3" style="color:white;">Can I get Microblading while pregnant?</h3>
                        </div>

                        <div id="collapse8" class="collapse" aria-labelledby="can-get" data-parent="#accordion">
                          <div class="card-body">
                            <p>Unfortunately, no. I recommend that you wait at least 2 months after you have given birth.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="am-good" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            <h3 class="my-3" style="color:white;">Am I a good candidate for Microblading?</h3>
                        </div>

                        <div id="collapse9" class="collapse" aria-labelledby="am-good" data-parent="#accordion">
                          <div class="card-body">
                            <p>If you are pregnant or nursing, if you have diabetes, glaucoma, skin diseases such as Shingles, psoriasis or eczema on the area of treatment, allergies to makeup, Keloid disorder, HIV/Hepatitis, skin cancer, hemophilia, or if you're taking skin medications like ro-accutaine and steroids.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does-microblading" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <h3 class="my-3" style="color:white;">Does Microblading hurt?</h3>
                        </div>

                        <div id="collapse10" class="collapse" aria-labelledby="does-microblading" data-parent="#accordion">
                          <div class="card-body">
                            <p>The Brow Studio applies a topical anesthetic ointment to help mask the potential pain from Microblading.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-have" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                            <h3 class="my-3" style="color:white;">Do I have to shave my eyebrows off?</h3>
                        </div>

                        <div id="collapse11" class="collapse" aria-labelledby="do-have" data-parent="#accordion">
                          <div class="card-body">
                            <p>Not at all. We map out the shape based on facial structure, current brows, and symmetry of the client’s face. Any unwanted hairs that are not desired in the new brow look will be removed. Please do not shave off eyebrows, that is never encouraged.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-last" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            <h3 class="my-3" style="color:white;">How long does Microblading last?</h3>
                        </div>

                        <div id="collapse12" class="collapse" aria-labelledby="how-last" data-parent="#accordion">
                          <div class="card-body">
                            <p>Microblading can last as long as it is maintained by the customer. On average, it can last 1-3 years based on the customer and care.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="i-have" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                            <h3 class="my-3" style="color:white;">I have had microblading done by another artist. How much is it to get my eyebrows done?</h3>
                        </div>

                        <div id="collapse13" class="collapse" aria-labelledby="i-have" data-parent="#accordion">
                          <div class="card-body">
                            <p>All new clients to Luna Beauty Studio are charged the new client cost. Their fee includes a 5-8 week touch up session. Once a client has paid the initial cost, they receive a significant discount for all future touch ups as long as the brows are maintained.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-schedule" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            <h3 class="my-3" style="color:white;">How do I schedule an appointment?</h3>
                        </div>

                        <div id="collapse14" class="collapse" aria-labelledby="how-schedule" data-parent="#accordion">
                          <div class="card-body">
                            <p>You can schedule an appointment by clicking the 'Book Online' or text to 786-613-9798.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does-work" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            <h3 class="my-3" style="color:white;">Does microblading work on all skin tones and skin types?</h3>
                        </div>

                        <div id="collapse15" class="collapse" aria-labelledby="does-work" data-parent="#accordion">
                          <div class="card-body">
                            <p>Yes, we can perform microblading on all skin tones. We can on most skin types, but if you have very oily skin, you may want to consider another option since as a combination brow, powder fill, or shading. We can discuss options.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="clients-who" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                            <h3 class="my-3" style="color:white;">Clients who are "NOT" candidates</h3>
                        </div>

                        <div id="collapse16" class="collapse" aria-labelledby="clients-who" data-parent="#accordion">
                          <div class="card-body">
                            <p>● Women who are pregnant or breastfeeding</p>

                            <p>● Clients who are keloid prone</p>

                            <p>● Clients who are currently using Accutane or Retin A</p>

                            <p>● Clients who are currently receiving chemotherapy</p>

                            <p>● Clients that are taking blood thinners</p>

                            <p>● Clients that are Diabetics</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-lip" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                            <h3 class="my-3" style="color:white;">What is lip blushing?</h3>
                        </div>

                        <div id="collapse17" class="collapse" aria-labelledby="what-lip" data-parent="#accordion">
                          <div class="card-body">
                            <p>Lip blushing is a form of semi-permanent cosmetic tattoo that enhances the lips' natural tint and shape, giving them a boost and a glossy touch. It's designed to define and outline your lips, not to actually make them fuller. It gives the illusion that they're fuller, but in a very natural way. It's more or less like microblading for your lips!</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-cost" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                            <h3 class="my-3" style="color:white;">How much does lip blush tattooing cost?</h3>
                        </div>

                        <div id="collapse18" class="collapse" aria-labelledby="how-cost" data-parent="#accordion">
                          <div class="card-body">
                            <p>Lip blushing usually costs between $350 and 500$ including the touch-up.</p> 

                            <p>Remember that lip blushing is a cosmetic service requiring technical skills and you should only rely on fully trained professionals for such procedures. This comes with a cost, but you should put your body within the hands of someone you trust.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-longdoes" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                            <h3 class="my-3" style="color:white;">How long does lip blushing last?</h3>
                        </div>

                        <div id="collapse19" class="collapse" aria-labelledby="how-longdoes" data-parent="#accordion">
                          <div class="card-body">
                            <p>Between 2 and 5 years, depending on how carefully you follow aftercare instructions and how many touch-up sessions you have.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-blushing" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                            <h3 class="my-3" style="color:white;">How long does lip blushing take?</h3>
                        </div>

                        <div id="collapse20" class="collapse" aria-labelledby="how-blushing" data-parent="#accordion">
                          <div class="card-body">
                            <p>A lip tattoo session takes about 2 hours.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-tattooing" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                            <h3 class="my-3" style="color:white;">How long does it take for lip tint tattooing to heal?</h3>
                        </div>

                        <div id="collapse21" class="collapse" aria-labelledby="how-tattooing" data-parent="#accordion">
                          <div class="card-body">
                            <p>A lip tattoo session takes about 2 hours.</p> 
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-expect" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                            <h3 class="my-3" style="color:white;">What to expect at your Appointment?</h3>
                        </div>

                        <div id="collapse22" class="collapse" aria-labelledby="what-expect" data-parent="#accordion">
                          <div class="card-body">
                            <p>Say goodbye to drawing on your lips every morning. Say hello to effortless pout.</p>

                            <h4>Step 1: We Numb Your Lips</h4> 

                            <p>A lot of clients ask us, "Does it hurt?" The answer is: minimal to mild paid! Before Lip Blush, we apply a topical anesthetic and wait 30 minutes to ensure you feel as little discomfort as possible.</p>

                            <h4>Step 2:  We Interview You!</h4> 

                            <p>During the interview, we'll work with you to customize your best pout, that will change your makeup rutine for 3-5 years.  We will ask you about your make up routine and style. Do you use lipstick on your lips everyday or only special occasions? Do you were full cover lipstick or just lip gloss?</p>

                            <p>We just want to make sure we will achieve the look that you desire!</p>

                            <h4>Step 3: We Draw Your Best Lip Shape</h4>

                            <p>Our goal is to create beautiful lips that match the symmetry of your face. We'll help you find the perfect color and shape just for your face. Once we determine your best shape, we'll sketch your new lip directly on your face.</p>

                            <h4>Step 4: Lip Treatment Starts</h4>

                            <p>Once your lips are numb, we begin the process of creating your new lips.  The art in lip blushing is layering the pixels perfectly without appearing dense or dark. That’s why creating lip blush is an art form and requires professional people to perform this service.</p>

                            <h4>Step 5: We Reveal Your New Lips</h4>

                            <p>And finally, the big reveal! After your lips are completed. No more stressful morning maintenance. No more smeared lipstick on your coffee cup. Just perfect lips every day, rain or shine, just add some lip gloss and go!</p>

                            <p>A complimentary touch-up after 6 - 8 weeks is recommended.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-dont" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                            <h3 class="my-3" style="color:white;">Do's and don't before a lip blushing appointment</h3>
                        </div>

                        <div id="collapse23" class="collapse" aria-labelledby="do-dont" data-parent="#accordion">
                          <div class="card-body">
                            <p><strong>DO</strong>: Bring pictures/lipsticks in order to show to your cosmetic tattoo artist the color that you want. Take a preventive tablet on the day of the appointment if you are prone to cold sores.</p> 

                            <p><strong>DON'T</strong>: Consume alcohol, caffeine, fish oil, Vitamin E, aspirin and ibuprofen as they cause the blood to thin and will result of more bleeding during the procedure.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-dont2" data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                            <h3 class="my-3" style="color:white;">Do's and don't after a lip blush tattoo session</h3>
                        </div>

                        <div id="collapse24" class="collapse" aria-labelledby="do-dont2" data-parent="#accordion">
                          <div class="card-body">
                            <p><strong>DO</strong>: Use a lot of lip balm to keep your lips moisturized. Plan a follow up appointment with your permanent makeup artist.</p> 

                            <p><strong>DON'T</strong>: Pick your scabs. Never! Also, avoid sun exposure and workouts for around 2 weeks. Do not eat spicy food in the 48 hours following the session.</p>

                            <p>How long does permanent cosmetic lipstick or lip blushing last? Does a person's natural lip pigmentation have any effect on this?</p>

                            <p>The results last between two to five years (or more) before requiring a color refresh. Color choice is as important, and if not more important for a lip tattoo than a brow tattoo. Underlying blue, purple, or brown tones must be balanced, and in certain cases corrected, with the use of colors such as orange modifying pigments. The natural lip tone and skin tone must always be considered to achieve a color appropriate for that client.</p>

                            <p>Similar to normal makeup techniques, is there a method to contour lips permanently to make them appear fuller?</p>

                            <p>Some technicians might use different shades of pigments to achieve a contoured look to the lips, but I choose technique. I find the key to subtlety is to apply color more densely in certain areas of the lips to create a naturally contoured look, blending in with the entire lip. As the skin on the lips holds pigment in a different way to the skin on your face it is important not to work too far outside of the lip border, but work with it to enhance the natural border and add fullness.</p>
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