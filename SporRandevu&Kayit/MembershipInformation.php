<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8"> 
    <title> Membership Information </title>
    <link rel="stylesheet" href="memberinfoss.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<body>

<div id="k"> 
<div id="logo"> <a href="UserProfile.php"> <img src="logo.png" width="100"> </a>  </div>  
<div id="user" >
 <a href="#" class="us"> <?php echo $_SESSION['username'] . " " . $_SESSION['username2'] ; ?> </a>
</div>
</div>

<div id="nvbar"> 
<div id="seans"> <a href="Seanssec.php"> Select Session </a> </div>
<div id="aktiviteler"> <a href="Aktiviteler.php"> My Activities </a>  </div>
</div>

<div id="govde">


<div class="sol">
 <div class="fotoandname">
  <div class="foto"> <img src="userfoto.jpg" width="100"> </div>
  <div id="name"> <?php echo $_SESSION['username'] . " " . $_SESSION['username2'] ; ?> </div>
  <div id="birth"> 22.09.2000  / ISTANBUL  </div>
 </div>
 <div class="mailtel">
  <div id="tel">  <i style="font-size:24px'" class="fa">&#xf095;</i> 0551 120 58 59 </div>
  <div id="mail"> <i style="font-size:24px" class="fa">&#xf0e0;</i> <?php echo $_SESSION['mail']  ; ?> </div> 
 </div>
</div>

<div class="sag">
 <div class="ulkebilgisi">
  <div class="country"> Country </div>
  <select name="v" class="ulke" disabled="disabled"> <option value="tr">Turkey </option> </select>
 </div>
 <div class="idandgender">
   <div class="id">
     <h3> ID </h3>
     <P> <?php  echo $_SESSION['kullaniciid']; ?>  </P>
   </div>
   <div class="gender">
    <h3> GENDER</h3>
    <P> <?php  echo $_SESSION['gend']; ?> </P>
   </div>
 </div>
</div>

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