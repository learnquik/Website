<?php include('../include/config.php');
session_start();
$email=$_SESSION['email'];
$_SESSION['email']=$email;

extract($_REQUEST);
if(isset($_SESSION['email']))
{

$id=$_REQUEST['id'];
if(isset($_REQUEST['id'])){

$query1=mysqli_query($con,"select * from teacher  where id='$id'");
$res1=mysqli_fetch_array($query1);

$id1=$res1['id'];
$name1=$res1['email'];
$address1=$res1['address'];
$email2=$_SESSION['email'];
$query2=mysqli_query($con,"select * from student where email='$email2'");
$res2=mysqli_fetch_array($query2);
$id2=$res2['id'];
$name2=$res2['email'];
$address2=$res2['address'];
$q="INSERT INTO `apply1` (`app_id`, `teacher_id`, `teacher_name`, `teacher_address`, `student_id`, `student_name`, `student_address`, `time`) VALUES (NULL, '$id1', '$name1', '$address1', '$id2', '$name2', '$address2', CURRENT_TIMESTAMP)";
$status=mysqli_query($con,$q);
if($status==1){
	header('location:application1.php');

	
}
   
 
else{
    header('location:job1.php');

   
}
}
}
?>



