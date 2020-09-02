<?php
if (isset($_POST["reset-password-submit"])) {
	$selector=$_POST["selector"];
	$validator=$_POST["validator"];
	$password=$_POST["pwd"];
	$passwordRepeat=$_POST["pwd-repeat"];
	if(empty($password)||empty($passwordRepeat)){
		header("Location:../create-new-password.php?newpwd=empty");
		exit();
}
else if ($password != $passwordRepeat) {
	header("Location:../create-new-password.php?pwdnotsame");
		exit();
}
$currentDate=date("U");
require 'config.php';
$sql="SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
$stmt=mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "There was an Error";
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$selector,$currentDate);
		mysqli_stmt_execute($stmt);
		$result= mysqli_stmt_get_result($stmt);
		if(!$row = mysqli_fetch_assoc($result)){
			echo "You Need To re-submit Your Reset Request. ";
			exit();

		}
		else{
			$tokenBin=hex2bin($validator);
			$tokenCheck=password_verify($tokenBin, $row["pwdResetToken"]);
			if($tokenCheck === false){
				echo "You Need To re-submit Your Reset Request. ";
			exit();
			}
			elseif ($tokenCheck === true)
			{
				$tokenEmail=$row['pwdResetEmail'];
				$sql="SELECT * From teacher WHERE email=?";
				$stmt=mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "There was an Error";
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
		mysqli_stmt_execute($stmt);
		$result= mysqli_stmt_get_result($stmt);
		if(!$row = mysqli_fetch_assoc($result)){
			echo "There was an error. ";
			exit();

		}
		else{
			$sql="UPDATE teacher SET password=? WHERE email=? ";
			$stmt=mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "There was an Error";
		exit();
	}
	else{
		$newPwdHash=password_hash($password, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt,"ss",$newPwdHash,$tokenEmail);
		mysqli_stmt_execute($stmt); 

		$sql="DELETE FROM pwdreset WHERE pwdResetEmail=?";
	$stmt=mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "There was an Error";
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
		mysqli_stmt_execute($stmt);
		header("Location:../login.php?newpwd=passwordupdated");
	}
	}




		}
	}

			}
		}
	}

	
}
else
{
	header("Location:../login.php");
}

?>