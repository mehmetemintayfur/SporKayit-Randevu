<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8"> 
    <title> T </title>
    <link rel="stylesheet" href="styles.css">
</head>



<body>


<div id="maindiv">
<div id="logo"> <img src="logo.png" width="200"> </div> <br> <br> 

<form  class="form" id="form1" action="" method="POST">
<input type="text" name="did" id="did" placeholder="ID">
<input type="password"name="password" id="password" placeholder="Password"> <br>
<button name="login" id="login"> Login </button> 

</form>
<br> <br> 

<div id="repassword"> Did you forgot your password ? </div> <br> <br> 
<button onclick="window.location.href='Signin.php'" id="newaccount" > Create New Account </button>

</div>

<?php



$connectt = new PDO("mysql:host=localhost; dbname=sporsalonu; charset=utf8",'root','');


if($_POST){
    $id = $_POST["did"];
    $password = $_POST["password"];
    $_SESSION["kullaniciid"] = $id;
   $kullanicisor = $connectt->prepare('SELECT * FROM members WHERE id=? && passw=?');
   $kullanicisor -> execute([
       $id,$password
   ]);

   echo $say = $kullanicisor->rowCount();

   if($say==1){
   $bul = "SELECT firstname,lastname,email,gender FROM members WHERE id='$id' ";
   $l= $connectt->query($bul) ;
   
   if($l->rowCount()>0){
    while($satir=$l->fetch(PDO::FETCH_ASSOC)){
        echo $satir['firstname'];    
        echo $satir['lastname'];
        echo $satir['email']; 
        echo $satir['gender'];
        $_SESSION["username"]=$satir['firstname'];
        $_SESSION["username2"]=$satir['lastname'];
        $_SESSION["mail"]=$satir['email'];
        $_SESSION["gend"]=$satir['gender'];
    }
    
    }
    header("location:UserProfile.php");
   }
    
   
   else{
       echo("olmadı");
   }

}

?>
  

</body>


<html>