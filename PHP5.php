<?php

if (isset($_POST['Enviar'])){
	if (!empty($_POST['Nom']) && !empty($_POST['Ape']) && !empty($_POST['Tel']) && !empty($_POST['Ema'])){
		$Nom = $_POST['Nom'];
		$Ape = $_POST['Ape'];
		$Tel = $_POST['Tel'];
		$Ema = $_POST['Ema'];
		$header = "From: cesaralbornozhx@gmail.com"."\r\n";
		$header.= "Reply-To: cesaralbornozhx@gmail.com"."\r\n";
		$header.= "X-Mailer: PHP/".phpversion();
		$mail = mail($Ema,$Nom." ".$Ape,$Tel,$header);
		if ($mail){
			echo "<h2>¡Mensaje enviado satisfactoriamente!</h2>";
}}}
?>