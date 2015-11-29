<?php
	

	require_once("random.php");
	require_once("Captcha.php");
	$Captcha = new Captcha();
	$Captcha->generate(new Random());
	echo $Captcha->result()."\n";
?>