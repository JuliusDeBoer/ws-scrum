<?php

function SendMail(string $dest, string $subject, string $msg, bool $dontWrap = false): void {
	if(!$dontWrap) {
		$msg = wordwrap($msg, 80);
	}

	mail($dest, $subject, $msg);
}

?>
