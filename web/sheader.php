<!DOCTYPE HTML>
<html>
<head>
<title>Watches Shop Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Watches" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
<div class="men_banner">
    <div class="container">
        <div class="header_top">
           <div class="header_top_left">
           <div class="box_11">
         <h4><p>Welcome..</p><div class="clearfix"> </div></h4>
         </div>
         <div class="clearfix"> </div>
      </div>
      <div class="header_top_right">
          
        <ul class="header_user_info">
         <a class="login" href="login.php">
           <i class=""> </i> 
           <li class="user_desc"></li>
         </a>
         
         <div class="clearfix"> </div>
         
        </ul>
        <ul class="header_user_info">
        <a href="index.php">
           <i class="user"> </i> 
           <li class="user_desc">Log Out</li>
         </a>
               <div class="clearfix"> </div>
               
        </div>
       </ul>
        <div class="clearfix"> </div>
 </div>
 <div class="header_bottom">
  <div class="logo">
     <h1><a href="shophome.php"><span class="m_1">W</span>atches</a></h1>
  </div>
  <div class="menu">
   <ul class="megamenu skyblue">
    <?php
    session_start();
    $_SESSION['shopid']=$shopid;
    
     echo "<li class='active grid'><a class='color4' href='shopwatch.php'>Watch.</a>	";
			echo "<li><a class='color10' href='stock.php'>Stock.</a></li>";
			echo "<li class='active grid'><a class='color3' href='bill.php'>Bill.</a></li>";
      ?>
			<div class="clearfix"> </div>
      </ul>
       <div class="clearfix"> </div>
       </div>
   </div>
       <div class="clearfix"> </div>
       </div>
   </div>
</div>