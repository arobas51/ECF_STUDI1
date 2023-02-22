<?php

echo <<<HTML
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Quai Antique</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu</button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Acceuil</a></li>
	        	<li class="nav-item"><a href="propos.php" class="nav-link">propos</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        	<li class="nav-item cta"><a href="reservation.php" class="nav-link">Reservation</a></li>

HTML
;
if (isset($_SESSION['id'])) {
	echo <<<HTML
				<li class="nav-item cta"><a href="#" class="nav-link">{$_SESSION['user_prenom']}</a></li>

HTML
;
}
else{
	echo <<<HTML
				<li class="nav-item cta"><a href="login/index.html" class="nav-link">Connexion</a></li>

HTML
;
}
echo <<<HTML
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

HTML
;