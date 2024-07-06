<?php
if (
	mail(
		"shelliestmail@gmail.com",
		"Contact Form: " . $_GET["subject"],
		"SENDER EMAIL: " . $_GET["sender"] . "\n\n" .
		"SUBJECT LINE: " . $_GET["subject"] . "\n\n" .
		"MESSAGE BODY: " . $_GET["body"]
	)
) {
	echo "1";
} else {
	echo "Unknown problem";
}