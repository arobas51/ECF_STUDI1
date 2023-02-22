<?php

session_name("Quai");
session_start();

$quai_antique = new PDO('mysql:host=localhost;dbname=quai_antique', "root", "");

echo <<<HTML

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Quai Antique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+33 6 12 56 48 79</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">votreemail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						     <p class="mb-0 register-link"><span>Horraires d'ouverture:</span> <span>Lundi - Dimache</span> <span>08:00 - 00:00</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
HTML
;

require_once "navbar.php";

echo <<<HTML


    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Specialtés</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


		<section class="ftco-section">
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Petit Dejeuner</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Diner</a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Boisson</a>

	              <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Desserts</a>

	              <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Vin</a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">
	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-day-1-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
HTML
;

foreach  ($quai_antique->query("SELECT * FROM Menu WHERE Type LIKE 'PETIT DEJEUNER'") as $row) {
echo <<<HTML
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/{$row['Img']});"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>{$row['Nom']}</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">{$row['Prix']}€</span>
							                </div>
							              </div>
							              <p><span>{$row['Description']}</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
HTML
;
}

echo <<<HTML
									</div>
								</div>
	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
HTML
;

foreach  ($quai_antique->query("SELECT * FROM Menu WHERE Type LIKE 'LUNCH'") as $row) {
echo <<<HTML
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/{$row['Img']});"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>{$row['Nom']}</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">{$row['Prix']}€</span>
							                </div>
							              </div>
							              <p><span>{$row['Description']}</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
HTML
;
}

echo <<<HTML
					        </div>
	              </div>	

	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">

HTML
;

foreach  ($quai_antique->query("SELECT * FROM Menu WHERE Type LIKE 'DINER'") as $row) {
echo <<<HTML
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/{$row['Img']});"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>{$row['Nom']}</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">{$row['Prix']}€</span>
							                </div>
							              </div>
							              <p><span>{$row['Description']}</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
HTML
;
}

echo <<<HTML
					        </div>
	              </div>	
	               <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">

HTML
;

foreach  ($quai_antique->query("SELECT * FROM Menu WHERE Type LIKE 'BOISSON'") as $row) {
echo <<<HTML
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/{$row['Img']});"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>{$row['Nom']}</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">{$row['Prix']}€</span>
							                </div>
							              </div>
							              <p><span>{$row['Description']}</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
HTML
;
}

echo <<<HTML


					        </div>
	              </div>	
	              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">

HTML
;

foreach  ($quai_antique->query("SELECT * FROM Menu WHERE Type LIKE 'DESSERTS'") as $row) {
echo <<<HTML
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/{$row['Img']});"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>{$row['Nom']}</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">{$row['Prix']}€</span>
							                </div>
							              </div>
							              <p><span>{$row['Description']}</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
HTML
;
}

echo <<<HTML

					        </div>
	              </div>
    						<div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Lunch de la mer</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">19€</span>
							                </div>
							              </div>
							              <p><span>Pavé de saumon</span>, <span>salades</span>, <span>semoule</span>, <span>Tomate</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/lunch-2.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Poulet de marmemlade</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">29€</span>
							                </div>
							              </div>
							              <p><span>Cuisse de poulet</span>, <span>sauce champignon</span>, <span>conconbre</span>, <span>persil</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/lunch-3.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Pané de poulet</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">29€</span>
							                </div>
							              </div>
							              <p><span>Poulet pané</span>, <span>Potatoes</span>, <span>sauce savoyarde</span>, <span>salade</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/lunch-4.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Barbecue de l'ocean</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">29€</span>
							                </div>
							              </div>
							              <p><span>Brochette de crevette</span>, <span>Potatoes</span>, <span>salade</span>, <span>noix de cajou</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/lunch-5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>original marin</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">29€</span>
							                </div>
							              </div>
							              <p><span>plateau de fruit de mer</span>, <span>salade normande</span>, <span>Riz</span>, <span>sauce de la mer</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/bg_5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>l'amérique</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">29€</span>
							                </div>
							              </div>
							              <p><span>Viande</span>, <span>Potatoes</span>, <span>Riz</span>, <span>Tomate</span></p>
							              <p><a href="#" class="btn btn-primary">Reserver</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
	              </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quai Antique</h2>
              <p>Une belle poesie au coeur de la savoie romantique et naturelle pour des papilles de bonheurs.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Horraires d'ouverture</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Lundi</span><span>08:00 - 00:00</span></li>
                <li class="d-flex"><span>Mardi</span><span>08:00 - 00:00</span></li>
                <li class="d-flex"><span>Mercredi</span><span>08:00 - 00:00</span></li>
                <li class="d-flex"><span>Jeudi</span><span>08:00 - 00:00</span></li>
                <li class="d-flex"><span>Vendredi</span><span>08:00 - 00:00</span></li>
                <li class="d-flex"><span>Samedi</span><span>08:00 - 00:00</span></li>
                <li class="d-flex"><span>Dimanche</span><span>08:00 - 00:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Une belle poesie au coeur de la savoie romantique et naturelle pour des papilles de bonheurs.</p>
            
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout Droits Reservé
  </p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
HTML
;