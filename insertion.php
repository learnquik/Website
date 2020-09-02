<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$subject=$_POST['subject'];
$s_class=$_POST['select1'];
$s_city=$_POST['select2'];
$s_time=$_POST['select3'];
$description=$_POST['desc'];
$address=$_POST['address'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$password=mysqli_real_escape_string($con,$_POST['password']);
$password=password_hash($password, PASSWORD_DEFAULT);

$description=str_replace("'","\'",$description);
$q="INSERT into student(name,email,phone,password,s_class,s_city,s_time,subject,description,address,city,pincode) VALUES('$name','$email','$phone','$password' ,'$s_class','$s_city','$s_time','$subject','$description','$address','$city','$pincode')";
$status=mysqli_query($con,$q);
if($status==1){
	echo "<center><h2 class='text-center bg-success'>Message sent</h2></center>";
}
   
 
else{
    echo "<center><h2 class='text-center bg-warning'>Message not sent</h2></center>";
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