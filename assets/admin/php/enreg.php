<?php
include("../../../config.php");
session_start();

if (isset($_POST['userid'])){
	$enreg_user = $_POST['userid'];
	$sql = "UPDATE `Accounts` set `Status` = '1' WHERE `id` = '$enreg_user'";

	if (mysqli_query($db,$sql)){
		$sql2 = "SELECT * FROM `Accounts` WHERE `Status` = '1' AND `id` = '$enreg_user'";
		$result = mysqli_query($db,$sql2);

		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];

		$isUpdate = mysqli_num_rows($result);

		if($isUpdate == 1) {
			echo "YES";
		}else {
			echo "NO";
		}

	} else {
		echo "NO";
	}
}
?>