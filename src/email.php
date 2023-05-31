<?php

function sendMail(string $to, string $subject, string $content): bool {
	$content = wordwrap($content, 70, "\r\n");

	// This does not work unless you have a local mailserver. You dont
	// return mail($to, $subject, phpversion());

	return true;
}

?>
