<?php

if (isset($_SERVER['REMOTE_ADDR'])) {
	$ip = $_SERVER['REMOTE_ADDR'];
	// echo "ip: $ip<br/>";
} else {
	echo 'Bad connection';
	die(1);
}

if (isset($_GET['email']) && isset($_GET['page'])) {
	$page = $_GET['page'];
	$email = $_GET['email'];
	if (
		mail(
		'droqen@gmail.com',
		"mailing list submission from $page",
		"email: $email
		ip: $ip"
		)
	) {
		echo 0;
		die(0);
	} else {
		echo 'Could not submit';
		die(1);
	}
} else {
	echo 'Bad form';
	die(1);
}
