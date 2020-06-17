<?php
	include("../../../config.php");
	session_start();

if (isset($_POST['userid'])){
	$admin_user = $_POST['userid'];
	$sql = "UPDATE `Accounts` set `Admin` = '0' WHERE `id` = '$admin_user'";

	if (mysqli_query($db,$sql)){
		$sql2 = "SELECT * FROM `Accounts` WHERE `Admin` = '0' AND `id` = '$admin_user'";
		$result = mysqli_query($db,$sql2);

		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];

		$isDelete = mysqli_num_rows($result);

		if($isDelete == 1) {
			echo "YES";
		}else {
			echo "NO - 1";
		}

	} else {
		echo "NO - 2";
	}
}

?>