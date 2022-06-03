<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sporsalonu";

$connect = new mysqli ($servername,$username,$password,$dbname);
if($connect->connect_error){
   die ("Baglanti hatasi olustu");
}

$isim= $_POST["fname"];
$soyisim= $_POST["lname"];
$mail = $_POST["email"];
$id2 = $_POST["did2"];
$sifre = $_POST["password2"];
$cinsiyet = $_POST["gender"];

$sql = "insert into members(firstname,lastname,email,id,password,gender) values('$isim','$soyisim','$mail','$id2','$sifre','$cinsiyet')";

 if($connect->query($sql)){ 
    echo("kayit yapildi");
 }
 else{
     echo("kayit yapilamadi");
 }
?>