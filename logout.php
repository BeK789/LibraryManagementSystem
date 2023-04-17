<?php   
session_start();
session_destroy();

	setcookie('loglms','logged',time()-(86400),'/');
	setcookie('logstd','logged',time()-(86400),'/');

header('location:lms.php');



?>