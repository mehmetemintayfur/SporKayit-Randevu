<?php
session_start();
$p = $_SESSION['username'];
$conn=mysqli_connect("localhost","root","","sporsalonu");
$s =("SELECT * FROM seanslar WHERE name= '$p' ");
$res = $conn->query($s);

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8"> 
    <title> T </title>
    <link rel="stylesheet" href="aktivites.css">
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


 <div class="orderedsessions">
   <table>
    <tr>
     <th> Session Date</th>
     <th> Start-End Time</th>
     <th> Situation</th>
    </tr>
    
     
    <?php
    
    $cinsiyet=$_SESSION['gend'];
    if($cinsiyet=="male"){
      $saat= "8.00 - 16.30";
    }
    else{
      $saat="17.00 - 20.30";
    }
    
    
    if($res->num_rows > 0){
      while($row = $res -> fetch_assoc()){
        echo "<tr><td>" . $row["date"] . "</td><td>" . $saat  . "</td><td>" . "ordered" . "</td></tr>" ;
      }
    }
      
   ?>
   </table>
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



<?php /*
    $add = $_SESSION['username'] ;
    $soyadd= $_SESSION['username2'];
    $gitmesayisi = $connect->query("select count(*) from seanslar where name = '$add' and lname = '$soyadd' ")->fetchColumn();
    for($i=0;$i<$gitmesayisi;$i++){ ?>
    <tr>
    
    <?php
$query = $connect->query("SELECT date FROM seanslar WHERE name='Ali' ")->fetch(PDO::FETCH_ASSOC);
if ( $query ){ ?>
    <td> <?php print_r($query);  ?>  </td>  <?php 
}
?>             
     <td> sdff</td>
     <td> ghdf</td>
    </tr>
    <?php }*/ ?>  