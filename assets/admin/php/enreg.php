<?php
	include("../../../config.php");
	session_start();

  if (isset($_POST['userid'])){
		$enreg_user = $_POST['userid'];
		$sql = "UPDATE `Accounts` set `Status` = '1' WHERE `id` = '$enreg_user'";

		if (mysqli_query($db,$sql)){
			echo "YES";
		}else {
			echo "NO";
		}
	} else {
		echo "NO";
	}
?>