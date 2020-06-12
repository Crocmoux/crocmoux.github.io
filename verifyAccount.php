<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET") {
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	} 
}

if ( isset($_GET['email'],$_GET['key']) ){
	//Récupération du mail et de la key dans l'url
	$mail = $_GET['email'];
	$key = $_GET['key'];
	
	//On Compare le mail et la key recu à celles dans la DB
	$sql = "SELECT * FROM `Accounts` WHERE `Mail` = '$mail' AND `EmailActivationKey` = '$key'";
   	$result = mysqli_query($db,$sql);

   	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   	$active = $row['active'];

   	$isMailAndKeyInDB = mysqli_num_rows($result);

   	if($isMailAndKeyInDB == 1) {
   		$sql = "UPDATE `Accounts` set `Status` = '1' WHERE `Mail` = '$mail' AND `EmailActivationKey` = '$key'";
	    $result = mysqli_query($db,$sql);
   		$_SESSION['AccountVerify'] = 1;
   		header("location: index.php");
   	}
   	else{
   		$_SESSION['AccountVerify'] = 0;
   		header("location: index.php");
   	}

}
//Pas de Mail et/ou Key dans l'url
else{
	$_SESSION['AccountVerify'] = 0;
   	header("location: index.php");
}
?>