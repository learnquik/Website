<?php session_start();

$email=$_SESSION['email'];
$_SESSION['email']=$email;
?>
<?php
if(isset($_SESSION['email']))
{ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>LEarnQuik ||Teachers Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        margin: 0;
        padding: 0;
    }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width:;
  text-align:left;
  font-family: arial;
  margin-bottom: 30px;
    }

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color:green;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.content{
    margin: 20px;
    height: 300px;
}
</style>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="font-size:100%;margin-bottom:10px;">Student's Admin Panel || LEarnQuik</a>
            </div>
            <!-- /.navbar-header 
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header">
                            <strong>Messages</strong>
                            <div class="progress thin">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                        </li>
                        <li class="avatar">
                            <a href="#">
                                <img src="images/1.png" alt=""/>
                                <div>New message</div>
                                <small>1 minute ago</small>
                                <span class="label label-info">NEW</span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="#">
                                <img src="images/2.png" alt=""/>
                                <div>New message</div>
                                <small>1 minute ago</small>
                                <span class="label label-info">NEW</span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="#">
                                <img src="images/3.png" alt=""/>
                                <div>New message</div>
                                <small>1 minute ago</small>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="#">
                                <img src="images/4.png" alt=""/>
                                <div>New message</div>
                                <small>1 minute ago</small>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="#">
                                <img src="images/5.png" alt=""/>
                                <div>New message</div>
                                <small>1 minute ago</small>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="#">
                                <img src="images/pic1.png" alt=""/>
                                <div>New message</div>
                                <small>1 minute ago</small>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer text-center">
                            <a href="#">View all messages</a>
                        </li>   
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge">9</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header text-center">
                            <strong>Account</strong>
                        </li>
                        <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
                        <li class="dropdown-menu-header text-center">
                            <strong>Settings</strong>
                        </li>
                        <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                        <li class="divider"></li>
                        <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index1.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        
                       
                       

                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Teacher's Lists<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="job1.php">Teacher's</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Application<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="application1.php">Applied for</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Logout<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                               
                                <li>
                                    <a href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
         <div id="page-wrapper">
        <div class="xs">
            <div class="bs-example4" data-example-id="simple-responsive-table">
                <center><h2 class="text-center bg-primary">Applied Successfully</h2></center>
                
        <div class="table-responsive">
      <table class="table table-bordered ">
        <thead class="text-center">
          <tr >
            <th>APP_ID</th>
            <th class="text-center" colspan="3">APPLIED FOR</th>
            <th class="text-center" colspan="3">APPLIED BY</th>
          </tr>
        </thead>
         <thead>
          <tr>
            <th>APP_ID</th>
            <th>TEA_ID</th>
            <th>TEA_EMAIL</th>
            <th>TEA_ADDRESS</th>
            <th>STU_ID</th>
            <th>STU_EMAIL</th>
            <th>STU_ADDRESS</th>
          </tr>
        </thead>
      
        <tbody>
            <?php include('../include/config.php');
            $query=mysqli_query($con,"select * from apply1  where student_name='$email'");
while($res=mysqli_fetch_array($query))
{?>
          <tr>
            <th scope="row"><?php echo $res['app_id'];?></th>
            <td><?php echo $res['teacher_id'];?></td>
            <td><?php echo $res['teacher_name'];?></td>
            <td><?php echo $res['teacher_address'];?></td>
            <td><?php echo $res['student_id'];?></td>
            <td><?php echo $res['student_name'];?></td>
            <td><?php echo $res['student_address'];?></td>
          </tr>
   <?php   } ?>   
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
</div></div></div>
      <div class="copy">
            <p>Copyright &copy; 2019. All Rights Reserved | Design by <a href="" target="_blank">LEarnQuik</a> </p>
        </div>
        </div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php }
?>