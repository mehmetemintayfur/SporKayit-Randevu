<?php
require 'config.php'
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8"> 
    <title> Create New Account </title>
    <link rel="stylesheet" href="styles2.css">
</head>

<body>



<div id="maindiv2">
<div id="logo2"> <img src="logo.png" width="200"> </div> <br> <br>
<form class="form" id="form2" action="" method="POST">

<input type="text" name="fname" id="fname" placeholder="First Name" required>    
<input type="text" name="lname" id="lname" placeholder="Last Name" required>
<input type="email" name="email" id="email" placeholder="E-Mail Adress" required>
<input type="text" name="did2" id="did2" placeholder="ID" required>
<input type="password" name="password2" id="password2" placeholder="Password" required>
<div id="a" > 
Gender : 
<input type="radio" name="gender" value="male" id="male" > <label for="male" required> Male</label> 
<input type="radio" name="gender" value="female" id="female"> <label for="female" required> Female</label> <br> <br> <br>
</div>



<button id="signin"> Sign In </button> 

</form>

</div>

<?php

if($_POST){
$isim= $_POST["fname"];
$soyisim= $_POST["lname"];
$mail = $_POST["email"];
$id2 = $_POST["did2"];
$sifre = $_POST["password2"];
$cinsiyet = $_POST["gender"];


$sorgu = $connect->prepare('INSERT INTO members SET firstname=?,lastname=?,email=?,id=?,passw=?,gender=?');
$ekle = $sorgu->execute([
    $isim,$soyisim,$mail,$id2,$sifre,$cinsiyet
]);
header("location:Login.php");
}
?>



</body>


<html>