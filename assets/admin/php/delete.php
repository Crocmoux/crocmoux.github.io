<?php
include("../../../config.php");
session_start();

if (isset($_POST['userid'])){
	$delete_user = $_POST['userid'];
	$sql = "DELETE FROM `Accounts` WHERE `id` = '$delete_user'";

	if (mysqli_query($db,$sql)){
		$sql2 = "SELECT * FROM `Accounts` WHERE `id` = '$delete_user'";
		$result = mysqli_query($db,$sql2);

		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];

		$isDelete = mysqli_num_rows($result);

		if($isDelete == 0) {
			echo "YES";
		}else {
			echo "NO";
		}

	} else {
		echo "NO";
	}
}
?>