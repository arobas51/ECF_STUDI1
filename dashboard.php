<?php

session_name("Quai");
session_start();

if (isset($_SESSION['id']) && $_SESSION['user_type'] == 'ADMIN') {
	echo "toto";
}
else {
	header("Location: http://localhost/ECF_Studi/login/index.html");
}