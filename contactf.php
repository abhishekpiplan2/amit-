<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$mailFrom=$_POST['mail'];
	$country=$_POST['country'];
	$message=$_POST['message'];
	$mailTo="amitvidya67@gmail.com";
	$headers="from: ".$mailFrom;
	$text="you have message from".$name.".\n\n".$message;
	mail($mailTo, $text, $headers);
	header("Location: index.php?mailsend");
}
