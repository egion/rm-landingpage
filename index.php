<?php

if(isset($_POST['submitted'])){
    
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $subject =$_POST["subject"];
  

  $mailtext = '<html>
   
  <body>
   
  <h1>Ihre Nachricht an das Team von RemedyMatch</h1>
   
  <p>Hallo '.$name.' ,</br> diese Nachricht ist eine Kopie ihrer Nachricht an uns:</p>
  
  '.$message.'
   
  <p>Diese E-Mail wurde automatisch erstellt, bitte antworten Sie nicht auf diese Email</p>
   
  </body>
  </html>';

   //Mailadresse
  $absender   = "noreply@remedymatch.io";
  $betreff    = "Ihre Nachricht an das Team von RemedyMatch:" .$subject;
  $betreff = "=?utf-8?b?".base64_encode($betreff)."?=";
   
  $header  = "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html; charset=utf-8\r\n";
   
  $header .= "From: $absender\r\n";

  
  
   
  mail( $email,
        $betreff,
        $mailtext,
        $header);
  echo '<script type="text/javascript">';
  echo 'alert("Email erfolgreich versendet!")'; //Use here the react call from PHP if necessary 
  echo '</script>';
  
  $mailtext = '<html>
   
  <body>
   
  <h1>Nachricht an das Team von RemedyMatch</h1>
   
  <p>Folgende Frage wurde über das Kontaktformular gestellt:</p>
  
  '.$message.'
  
  <p> Die Kontaktdaten sind: 
  </br> Name: '.$name.' </br>
  EMail: '.$email.'</p>
  <p>Diese E-Mail wurde automatisch erstellt, bitte antworten Sie nicht auf diese Email.</p>
   
  </body>
  </html>';

   //Mailadresse
  $absender   = "noreply@remedymatch.io";
  $betreff    = $subject;
  $betreff = "=?utf-8?b?".base64_encode($betreff)."?=";
   
  $header  = "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html; charset=utf-8\r\n";
   
  $header .= "From: $absender\r\n";

  
  
   
  mail( "remedymatch2020@gmx.de",
        $betreff,
        $mailtext,
        $header);
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>Hilft beim Helfen- RemedyMatch</title>
<!--
Reflux Template
https://templatemo.com/tm-531-reflux
-->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon.png" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="mstile-144x144.png">
    
    
    <script type="text/javascript">
		var time =0;
		var timer;
		function setTime(){
			time = time +1;
			
		}
		function eingaben_ueberpruefen(){
			 clearInterval(timer);
			 if (time < 10) { // Botschutz
			  
			  document.contact.name.focus();
			  return false;
			 }
			 else
			 return true;
		}
		function startTimer(){
			timer =setInterval(setTime,1000);
		}
		
		</script>
    
    
    
  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="assets/images/logo.png" alt="" /></a>
            </div>
            <div class="author-content">
              <h4>RemedyMatch</h4>
              <span>Hilft beim Helfen</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section2">Helfen/ Um Hilfe bitten</a></li>
                <li><a href="#section1">Über RemedyMatch</a></li>
                <li><a href="#section6">Mithelfen</a></li>
                <li><a href="#section3">Informationen</a></li>
                <li><a href="#section5">Aktuelle Fallzahlen</a></li>
                <li><a href="#section4">Kontakt</a></li>
                <li><a href="#section7">Über uns</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://www.facebook.com/remedy.match.16" target="_blank"><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="https://twitter.com/RemedyMatch" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/remedymatch/" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://github.com/remedyMatch" target="_blank"><i class="fa fa-github"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>Copyright 2020 RemedyMatch</p>
            </div>
          </div>
        </div>
      </div>
      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>Um Hilfe bitten</h2>
            <div class="line-dec"></div>
            <span
              >Suchen Sie hier aus, ob Sie Material bieten können oder ob Sie noch Material suchen.</span
            >
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>Hilfe anbieten</h4>
                <p>
                  Möchtest du Atemschutzmasken, Handschuhe oder sonstige Schutzartikel spenden, dann trage sie diese bitte hier ein:

                  <div class="white-button-service">
                    <a href="#">Spende anbieten</a>
                  </div>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>Bedarf melden</h4>
                <p>
                  Benötigst du medizinische Schutzartikel, dann klicke hier:
                  <div class="white-button-service">
                    <a href="#">Bedarf melden</a>
                  </div>
                </p>
              </div>
            </div>
           
            
          </div>
        </div>
      </section>
      <section class="section about-us" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>Über RemedyMatch</h2>
            <div class="line-dec"></div>
            <span>
              RemedyMatch ist eine deutschlandweite Logistikplattform, die Bestand und Bedarf von medizinischen Schutzartikeln zusammenbringt! 
              RemedyMatch erfasst zu spendende Schutzartikel, wie Handschuhe, Masken, Kittel oder Desinfektionsmittel, und sorgt dafür, dass diese dort ankommen, 
              wo sie gebraucht werden. So werden Lieferengpässe während der COVID-19 Pandemie überbrückt und der persönliche Schutz der Helferinnen und Helfer gewährleistet.


             
            </span>
            
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img src="assets/images/Werbung1.png" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <h4>Für wen?</h4>
                  <p>
                      Alle, die medizinisch tätig sind oder besondere Hygienevorschriften einhalten müssen und aktuell einen Mangel erleben, dürfen einen Bedarf einstellen.
                      Das können Kliniken, niedergelassene Ärztinnen und Ärzte, Pflegekräfte, Mitarbeiter:innen im Einzelhandel oder pflegende Angehörige sein.
                  </p>
                  <h4>Wer spendet?</h4>
                  <p>
                      Es sind alle aufgerufen, Schutzartikel kostenfrei zur Verfügung zu stellen, die diese aktuell nicht benötigen. Das können Fitnessstudios, Restaurants, Hotels, 
                      Lackierer, Betriebe, Werkstätte oder Privathaushalte sein. Jeder Handschuh hilft!
                      </br>
                      Außerdem sucht RemedyMatch freiwillige Einzelpersonen oder Unternehmen, die beim Transport von Spenden unterstützen.

                  </p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </section>

       <section class="section fall" data-section="section6">
        <div class="container">
            <div class="section-heading">
              <h2>Mithelfen</h2>
              <div class="line-dec"></div>
              <span>
                 Jede/r ist herzlich aufgerufen mitzuhelfen.
              </span>
            </div>
        </div>
        <div class="left-image-post">
            <div class="row">
              
              <div class="col-md-6">
                <div class="right-text">
                  <ol>  
                    <li>Schutzartikel spenden </li>
                    <li>Freiwillig beim Transport helfen </li>
                    <li>Weitersagen: Wenn ihr wisst, in wessen Keller oder Lager noch Schätze schlummern, erzählt ihnen von RemedyMatch </li>
                    <li>Auf Sozialen Medien teilen</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
      </section>

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>Informationen</h2>
            <div class="line-dec"></div>
            
          </div>
          <div class="row">
            <div class="isotope-wrapper">
                <div class="isotope-box">
                <div class="isotope-item" data-type="people">
                  <figure class="snip1321">
                    <img
                      src="assets/images/virus.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/virus.png"
                        data-lightbox="image-1"
                        data-title="Der SARS-CoV-2 Virus"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Der SARS-CoV-2 Virus</h4>
                      <span>Der Der SARS-CoV-2 Virus kann die gefährliche Krankheit Covid19 auslösen.</span>
                    </figcaption>
                  </figure>
                </div>

               
                <div class="isotope-item" data-type="nature">
                  <figure class="snip1321">
                    <img
                      src="assets/images/mask.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/mask.jpg"
                        data-lightbox="image-1"
                        data-title="Atemschutzmasken der Schutzklasse FFP-2"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Atemschutzmasken der Schutzklasse FFP-2</h4>
                      <span>Diese Schutzmaske, soll laut dem RKI, die Pflegedienstmitarbeiter vor einer Infektion mit dem SARS-CoV-2 schützen.</span>
                    </figcaption>
                  </figure>
                </div>
                 <div class="isotope-item" data-type="animals">
                  <figure class="snip1321">
                    <img
                      src="assets/images/fallzahlen.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/fallzahlen.jpg"
                        data-lightbox="image-1"
                        data-title="Fallzahlen in Deutschland"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Fallzahlen in Deutschland</h4>
                      <span>Klicken Sie hier um einen Überblick über die aktuellen Fallzahlen in Deutschland zu erhalten.</span>
                    </figcaption>
                  </figure>
                </div>
                

                <div class="isotope-item" data-type="people">
                  <figure class="snip1321">
                    <img
                      src="assets/images/einmalhandschuhe.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/einmalhandschuhe.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Einmalhandschuhe</h4>
                      <span>Diese Handschuhe sollen das Personal vor einer Corona-Infektion schützen, werden aber langsam knapp.</span>
                    </figcaption>
                  </figure>
                </div>

              </div>
            </div>
          </div>
        </div>
        
      </section>
      <section class="section fall" data-section="section5">
        <div class="container">
            <div class="section-heading">
              <h2>Die aktuellen Fallzahlen</h2>
              <div class="line-dec"></div>
              <span>
                Die aktuellen Fallzahlen bereit gestellt durch Johns Hopkins Center for Systems Science and Engineering.
              </span>
            </div>
          </div>
            <div style="padding-top: 0%; position: relative; width:100%; height:600px;">
              <iframe src="https://www.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6" height="100%" width="100%"></iframe>
            </div>

      </section>
      <section class="section contact-us" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Kontaktieren Sie uns:</h2>
            <div class="line-dec"></div>
            <span
              >Bei Fragen, Feedback, Vorschlägen oder wenn ihr mithelfen wollt bei der Weiterentwicklung der Plattform, meldet euch gern!</span
            >
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="index.php" method="post" onSubmit="return eingaben_ueberpruefen();" name="contact">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="name"
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder="Ihr Name..."
                          required="" onFocus="startTimer();"
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="email"
                          type="text"
                          class="form-control"
                          id="email"
                          placeholder="Ihre Email..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input
                          name="subject"
                          type="text"
                          class="form-control"
                          id="subject"
                          placeholder="Betreff ihrer Anfrage..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea
                          name="message"
                          rows="6"
                          class="form-control"
                          id="message"
                          placeholder="Ihre Nachricht..."
                          required=""
                        ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button" name="submitted">
                          Nachricht senden
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
       <section class="section fall" data-section="section7">
        <div class="container">
            <div class="section-heading">
              <h2>Über uns</h2>
              <div class="line-dec"></div>
              <span>
                RemedyMatch wurde entwickelt von einem Team aus etwa 30 Leuten während des Hackathons #WirvsVirus vom 21.-23. März 2020.
              </span>
            </div>
          </div>
      </section>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>
