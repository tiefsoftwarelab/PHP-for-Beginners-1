<?php
include "conn.php";

if(isset($_POST['submit'])){
	$sql = "INSERT INTO `tbinfo`(`first_name`, `onther_name`, `gender`, `email`) VALUES ('$_POST[first_name]', '$_POST[onther_name]', '$_POST[gender]', '$_POST[email]')";

	if(mysqli_query($conn, $sql) === true){
		echo " Data submited Successful. Please welcome.";
	}else{
		echo"Opps";
	}
}



?>