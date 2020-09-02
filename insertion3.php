<?php
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$message=$_POST['message'];


$message=str_replace("'","\'",$message);
$q="INSERT into contact(fname,lname,sub,email,message) VALUES('$fname','$lname','$sub','$email','$message')";
$status=mysqli_query($con,$q);
if($status==1){
	echo "<center><h2 class='text-center bg-success'>Message Sent Successfully</h2></center>";
}
   
 
else{
    echo "<center><h2 class='text-center bg-warning'>Message Not Sent</h2></center>";
}
}
?>
<!--<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="index.php"><BUTTON >GO BACK</BUTTON></a>
</body>
</html>-->