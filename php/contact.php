<?php

$subject = "JMHost";
$contactName = $_GET["contactName"];
$contactEmail = urldecode($_GET["contactEmail"]);
$contactMessage = $_GET["contactEmail"];

mail("jmultimidia@gmail.com", $subject, "Mensagem para: $contactName : ".$contactMessage, "From: $contactEmail\n");

echo "Obrigao por entrar em cntato! Em breve enviaremos uma resposta.";

?>