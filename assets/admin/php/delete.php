<?php
	include("../../../config.php");
	session_start();

 	if (isset($_POST['userid'])){
		$delete_user = $_POST['userid'];
		$sql = "DELETE FROM `Accounts` WHERE `id` = '$delete_user'";

		if (mysqli_query($db,$sql)){
			echo "YES";
		}else {
			echo "NO";
		}
	} else {
		echo "NO";
	}
?>