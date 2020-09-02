<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$t_gender=$_POST['t_gender'];
$qual=$_POST['qual'];
$bdate=$_POST['bdate'];
$subject=$_POST['subject'];
$t_class=$_POST['t_class'];
$t_city=$_POST['t_city'];
$t_time=$_POST['t_time'];
$description=$_POST['t_desc'];
$address=$_POST['address'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$password=$_POST['password'];
$file1=$_FILES['file1']['name'];
$file2=$_FILES['file2']['name'];
move_uploaded_file($_FILES['file1']['tmp_name'],"images/teacher_photo/".$_FILES['file1']['name']); 

move_uploaded_file($_FILES['file2']['tmp_name'],"images/teacher_resume/".$_FILES['file2']['name']); 

$password=mysqli_real_escape_string($con,$_POST['password']);
$password=password_hash($password, PASSWORD_DEFAULT);
$description=str_replace("'","\'",$description);
$q="INSERT into teacher(name,bdate,t_gender,email,phone,password,qual,subject,t_class,t_city,t_time,address,city,pincode,t_desc,photo,resume) VALUES('$name','$bdate','$t_gender','$email','$phone','$password' ,'$qual','$subject','$t_class','$t_city','$t_time','$address','$city','$pincode','$description','$file1','$file2')";
$status=mysqli_query($con,$q);
if($status==1){
	echo "<center><h2 class='text-center bg-success'>Registration Successfull</h2></center>";
}
   
 
else{
    echo "<center><h2 class='text-center bg-warning'>Registration Unsuccessfull</h2></center>";
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