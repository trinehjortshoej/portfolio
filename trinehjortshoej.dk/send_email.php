<?php

$from= "trine@hjortshoej.biz";
$email="trine@hjortshoej.biz";
$navn=$_POST['navn'];
$mail=$_POST['email'];
$besked=$_POST['besked'];

mail ( $mail, $navn, $besked );
print "Jeg har fået din besked, tak! Jeg vender tilbage hurtigst muligt."

?>
