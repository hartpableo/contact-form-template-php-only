<?php 
	if (isset($_POST['submit'])) {
		// Get Data From HTML Form
		$name = $_POST['name'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$subject = "Someone wants to join your contact list.";

		// Email Details or Template 
		$mailTo = "support@dothedough.online";
		$headers = "From: ".$mailFrom;
		$message = "You have received an email from ".$name.".\n\n"."Contact Number: ".$number."\n\n"."Add this person to your contact list of Do The Dough customers now.";

		// Conditions
		if (empty($name) || empty($email) || empty($number)) {
			header('Location: form.php?error=empty'); // Add a Location
			exit();
		} else {
			mail($mailTo, $subject, $message, $headers);
			header("Location: index.php?mailsend");
		}
	}