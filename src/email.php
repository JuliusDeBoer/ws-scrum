<?php

function sendMail(string $to, string $subject, string $content): bool {
	$content = wordwrap($content, 70, "\r\n");
	return mail($to, $subject, phpversion());
}

?>
