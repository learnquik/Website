<?php session_start();?> 
<?php 
   include('include/header.php');
extract($_REQUEST);
include'include/config.php';
if(isset($submit))
{

$file=$_FILES['file']['name'];
  
  $query="insert into property values('','$title','$bedroom','$hall','$kitchan','$bathroom','$balcony','$price','$sqr_price','$add','$video','$file','$description','$location','$property_owner','$property_type','$lot_size','$sold','$land_area',now())";  
  $r=mysqli_query($con,$query);
  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 

if($r)
{
  $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Add successful.
  </div>';    
}
else
{
$msg='<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Add Not successful.
  </div>';

}
        
}

?>  
    <!-- Header -->