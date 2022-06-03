<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8"> 
    <title> T </title>
    <link rel="stylesheet" href="yenieeee.css">
</head>



<body>

<div id="k"> 
<div id="logo"> <a href="UserProfile.php"> <img src="logo.png" width="100"> </a>  </div>  
<div id="user" >
 <a href="MembershipInformation.php" class="us"> <?php echo $_SESSION['username'] . " " . $_SESSION['username2'] ; ?> </a>
</div>
</div>

<div id="nvbar"> 
<div id="seans"> <a href="Seanssec.php"> Select Session </a> </div>
<div id="aktiviteler"> <a href="Aktiviteler.php"> My Activities </a>  </div>
</div>

<div id="govde">
  
<div id="duyuru">
<div id="duyurubasligi"> Duyurular </div> <br> <br>
  <p> Herhangi bir duyuru bulunmamaktadır. </p> 
</div>
</div>

<div id="infos">  
<div id="infos3">  
  <a href="UserProfile.php">Home Page</a>  <br>
  <a href="">About Us</a>   <br>
  <a href="">Communication</a>  
</div>
</div>

<div id="infos2">  </div>


</body>


<html>