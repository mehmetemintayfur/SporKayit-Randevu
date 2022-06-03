<?php
require 'config.php';
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="tr">


<head>
    <meta charset="utf-8"> 
    <title> T </title>
    <link rel="stylesheet" href="g.css">
</head>

<?php
/*
if($_SESSION['gend']=="male"){
  
  if($_SESSION['gun1']>1 || $_SESSION['gun2']>1 || $_SESSION['gun3']>1 || $_SESSION['gun4']>1 || $_SESSION['gun5']>1 || $_SESSION['gun6']>1 || $_SESSION['gun7']>1 && $_POST["male"]){
    ?>
  <script>
    alert("You can choose only one session per day !");
  </script> <?php
  }
  else if($_POST["male"] && $_SESSION['gun1']<=1 && $_SESSION['gun2']<=1 && $_SESSION['gun3']<=1 && $_SESSION['gun4']<=1 && $_SESSION['gun5']<=1 && $_SESSION['gun6']<=1 && $_SESSION['gun7']<=1 ){
  $ssecim = $_POST["male"]; 
  $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
  $ekle2 = $sorgu2->execute([
  $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
  ]);
  
  } 
  else if($_POST["female"] ){
  ?>
  <script>
    alert("You chose the wrong gender !");
  </script> <?php
  }
 
} */

   if($_SESSION['gend']=="male"){
    if($_POST["female"]){
    ?>  <script> alert("Wrong Gender !");</script> <?php
    }
    
    else{
    $ssecim = $_POST["male"];  
    switch ($ssecim) {
      case  $_SESSION['k1'] :
        if($_POST["male"] && $_SESSION['gun1']<1 ){
          $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
          $ekle2 = $sorgu2->execute([
          $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
        ]);
        }
        else{
          ?>  <script> alert("You can choose only one session per day !");</script>   <?php
          }
        break;
      case  $_SESSION['k2'] :
        if($_POST["male"] && $_SESSION['gun2']<1 ){
          $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
          $ekle2 = $sorgu2->execute([
          $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
        ]);
        }
        else{
          ?>  <script> alert("You can choose only one session per day !");</script>   <?php
        }
        break;
      case  $_SESSION['k3'] :
        if($_POST["male"] && $_SESSION['gun3']<1 ){
          $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
          $ekle2 = $sorgu2->execute([
          $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
        ]);
        }
        else{
          ?>  <script> alert("You can choose only one session per day !");</script>   <?php
        }
      break;
      case  $_SESSION['k4'] :
        if($_POST["male"] && $_SESSION['gun4']<1 ){
          $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
          $ekle2 = $sorgu2->execute([
          $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
        ]);
        }
        else{
          ?>  <script> alert("You can choose only one session per day !");</script>   <?php
        }
      break;
      case  $_SESSION['k5'] :
        if($_POST["male"] && $_SESSION['gun5']<1 ){
          $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
          $ekle2 = $sorgu2->execute([
          $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
        ]);
        }
        else{
          ?>  <script> alert("You can choose only one session per day !");</script>   <?php
          }
      break;
      case  $_SESSION['k6'] :
        if($_POST["male"] && $_SESSION['gun6']<1 ){
          $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
          $ekle2 = $sorgu2->execute([
          $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
        ]);
        }
        else{
          ?>  <script> alert("You can choose only one session per day !");</script>   <?php
          }
      break;
      case  $_SESSION['k7'] :
        if($_POST["male"] && $_SESSION['gun5']<1 ){
          $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
          $ekle2 = $sorgu2->execute([
          $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
        ]);
        }
        else{
        ?>  <script> alert("You can choose only one session per day !");</script>   <?php
        }
      break;

      default:
        # code...
        break;
    }
  }
}





else if($_SESSION['gend']=="female"){
  if($_POST["male"]){
    ?>  <script> alert("Wrong Gender !");</script> <?php
    }
  else{
  $ssecim = $_POST["female"];  
  switch ($ssecim) {
    case  $_SESSION['k1'] :
      if($_POST["female"] && $_SESSION['fgun1']<1 ){
        $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
        $ekle2 = $sorgu2->execute([
        $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
      ]);
      }
      else{
      ?>  <script> alert("You can choose only one session per day !")</script>   <?php
      }
      
      break;
    case  $_SESSION['k2'] :
      if($_POST["female"] && $_SESSION['fgun2']<1 ){
        $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
        $ekle2 = $sorgu2->execute([
        $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
      ]);
      }
      else{
      ?>  <script> alert("You can choose only one session per day !")</script>   <?php
      }
      break;
    case  $_SESSION['k3'] :
      if($_POST["female"] && $_SESSION['fgun3']<1 ){
        $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
        $ekle2 = $sorgu2->execute([
        $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
      ]);
      }
      else{
      ?>  <script> alert("You can choose only one session per day !")</script>   <?php
      }
    break;
    case  $_SESSION['k4'] :
      if($_POST["female"] && $_SESSION['fgun4']<1 ){
        $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
        $ekle2 = $sorgu2->execute([
        $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
      ]);
      }
      else{
      ?>  <script> alert("You can choose only one session per day !")</script>   <?php
      }
    break;
    case  $_SESSION['k5'] :
      if($_POST["female"] && $_SESSION['fgun5']<1 ){
        $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
        $ekle2 = $sorgu2->execute([
        $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
      ]);
      }
      else{
      ?>  <script> alert("You can choose only one session per day !")</script>   <?php
      }
    break;
    case  $_SESSION['k6'] :
      if($_POST["female"] && $_SESSION['fgun6']<1 ){
        $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
        $ekle2 = $sorgu2->execute([
        $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
      ]);
      }
      else{
      ?>  <script> alert("pjfdjf")</script>   <?php
      }
    break;
    case  $_SESSION['k7'] :
      if($_POST["female"] && $_SESSION['fgun5']<1 ){
        $sorgu2 = $connect->prepare('INSERT INTO seanslar SET name=?,lname=?,date=?,gender=?');
        $ekle2 = $sorgu2->execute([
        $_SESSION['username'],$_SESSION['username2'],$ssecim,$_SESSION['gend']
      ]);
      }
      else{
      ?>  <script> alert("You can choose only one session per day !") </script>   <?php
      }
    break;

    default:
      # code...
      break;
  }
  }
}

?>

<body>

<div id="k"> 
<div id="logo"> <a href="UserProfile.php"> <img src="logo.png" width="100"> </a>  </div>   
<div id="user" >
<a href="MembershipInformation.php" class="us"> <?php echo $_SESSION['username'] . " " . $_SESSION['username2'] ; $isim=$_SESSION['username']; ?> </a> 
</div>
</div>
<?php
$d1 = date('d.m.Y'); $d2= date('d.m.Y',strtotime(' +1 day')); $d3=date('d.m.Y',strtotime(' +2 day')); $d4=date('d.m.Y',strtotime(' +3 day'));
$d5 = date('d.m.Y',strtotime(' +4 day')); $d6 = date('d.m.Y',strtotime(' +5 day')); $d7 = date('d.m.Y',strtotime(' +6 day'));

$_SESSION['k1'] = $d1; $_SESSION['k2'] = $d2; $_SESSION['k3'] = $d3; $_SESSION['k4'] = $d4; $_SESSION['k5'] = $d5; $_SESSION['k6'] = $d6; $_SESSION['k7'] = $d7; 


$d1doluluk = $connect->query("select count(*) from seanslar where date = '$d1' and gender = 'male' ")->fetchColumn();
$d2doluluk = $connect->query("select count(*) from seanslar where date = '$d2' and gender = 'male' ")->fetchColumn();
$d3doluluk = $connect->query("select count(*) from seanslar where date = '$d3' and gender = 'male' ")->fetchColumn();
$d4doluluk = $connect->query("select count(*) from seanslar where date = '$d4' and gender = 'male' ")->fetchColumn();
$d5doluluk = $connect->query("select count(*) from seanslar where date = '$d5' and gender = 'male' ")->fetchColumn();
$d6doluluk = $connect->query("select count(*) from seanslar where date = '$d6' and gender = 'male' ")->fetchColumn();
$d7doluluk = $connect->query("select count(*) from seanslar where date = '$d7' and gender = 'male' ")->fetchColumn();

$fd1doluluk = $connect->query("select count(*) from seanslar where date = '$d1' and gender = 'female' ")->fetchColumn();
$fd2doluluk = $connect->query("select count(*) from seanslar where date = '$d2' and gender = 'female' ")->fetchColumn();
$fd3doluluk = $connect->query("select count(*) from seanslar where date = '$d3' and gender = 'female' ")->fetchColumn();
$fd4doluluk = $connect->query("select count(*) from seanslar where date = '$d4' and gender = 'female' ")->fetchColumn();
$fd5doluluk = $connect->query("select count(*) from seanslar where date = '$d5' and gender = 'female' ")->fetchColumn();
$fd6doluluk = $connect->query("select count(*) from seanslar where date = '$d6' and gender = 'female' ")->fetchColumn();
$fd7doluluk = $connect->query("select count(*) from seanslar where date = '$d7' and gender = 'female' ")->fetchColumn();
?>

<div id="nvbar"> 
<div id="seans"> <a href="seanssec.php"> Select Session </a> </div>
<div id="aktiviteler"> <a href="aktiviteler.php"> My Activities </a>  </div>
</div>
<div id="space"> Session Selection </div>
<div id="govde">
 <div id="sessioninfos">
  <div id="spc2"> </div>   
  <div id="spc3"> </div>
  <div id="selectinfo"> 
   <div id="capacity"> 
    <div id="fullquota"> Full Quota </div>
    <div id="totalcapacity"> Total Capacity </div>  
   </div>  
   <div id="someinfo"> 
    <div id="open"> Sessions Open to Reservation </div>
    <div id="full"> Full Session </div>
    <div id="selected"> Your Selected Sessions </div>
   </div>
  </div>
  <form action="" method="POST">
  <div id="seanslar">
   <div class="day"> 
    <div class="d"><?php
    $dayofweek1 = date('l');
    $date1 = date('d.m.Y');
    echo $dayofweek1; ?> <br> <?php  
    echo $date1;
   ?>
    </div>
    
    <div class="firstsession" id="myElement"> 
     FITNESS <br>
     MEN 
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($d1doluluk);  ?>
      </div>
      <?php  
      $d1gitme = $connect->query("select count(*) from seanslar where date = '$d1' AND name = '$isim' ")->fetchColumn();
      $_SESSION['gun1'] = $d1gitme;
      if($d1doluluk>=10 && $d1gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($d1doluluk<10 && $d1gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($d1doluluk>=10 && $d1gitme<1 && $_SESSION['gend']=="male"){ ?>
        <script>
        var element = document.getElementById("myElement");
        element.style.borderColor = "#e81f69"; </script> <?php
      }   
     
      ?>
      <div class="gidensayisi">
       10
      </div>
     </div>
     <div class="saat">
      08:00 - 16.30
     </div> <br><?php $abc=date('d.m.Y'); ?>
     <input type="checkbox"  value="<?php echo $abc ?>" class="ma" name="male">  <br> <br>
     <div class="gendmale"> 
     Male
     </div>
    </div>
    <div class="secondsession" id="meinElement"> 
     FITNESS <br>
     WOMEN 
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($fd1doluluk);  ?>
      </div>
      <?php  
      $fd1gitme = $connect->query("select count(*) from seanslar where date = '$d1' AND name = '$isim' ")->fetchColumn(); 
      $_SESSION['fgun1'] = $fd1gitme;
      if($fd1doluluk>=10 && $fd1gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($fd1doluluk<10 && $fd1gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($fd1doluluk>=10 && $fd1gitme<1 && $_SESSION['gend']=="female"){ ?>
        <script>
        var element = document.getElementById("meinElement");
        element.style.borderColor = "#e81f69"; </script> <?php
      }
      
      ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      17:00 - 20:30
     </div> <br> <?php $cba=date('d.m.Y'); ?>
     <input type="checkbox" value="<?php echo $cba ?>" name="female">  <br> <br>
     <div class="gendfemale"> 
     Female
     </div>
    </div>
   </div>
   <div class="day">
    <div class="d">
    <?php
    $dayofweek2 = date('l',strtotime(' +1 day'));
    $date2 = date('d.m.Y',strtotime(' +1 day'));
    echo $dayofweek2; ?> <br> <?php  
    echo $date2;
   ?>
    </div>
    <div class="firstsession" id="myElement2"> 
     FITNESS <br>
     MEN
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($d2doluluk);  ?>
      </div>
      <?php  
      $d2gitme = $connect->query("select count(*) from seanslar where date = '$d2' AND name = '$isim' ")->fetchColumn();
      $_SESSION['gun2'] = $d2gitme;
      if($d2doluluk>=10 && $d2gitme>=1 && $_SESSION['gend']=="male" ){ ?>
        <script> 
        var element = document.getElementById("myElement2");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($d2doluluk<10 && $d2gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement2");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($d2doluluk>=10 && $d2gitme<1 && $_SESSION['gend']=="male"){ ?>
        <script>
        var element = document.getElementById("myElement2");
        element.style.borderColor = "#e81f69"; </script> <?php
      } 
      ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      08:00 - 16.30
     </div> <br> <?php $abc2=date('d.m.Y',strtotime(' +1 day')); ?>
     <input type="checkbox" value="<?php echo $abc2 ?>" class="ma" name="male">  <br> <br>
     <div class="gendmale"> 
     Male
     </div>
    </div>
    <div class="secondsession" id="meinElement2"> 
     FITNESS <br>
     WOMEN 
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($fd2doluluk);  ?>
      </div>
      <?php  
      $fd2gitme = $connect->query("select count(*) from seanslar where date = '$d2' AND name = '$isim' ")->fetchColumn(); 
      $_SESSION['fgun2'] = $fd2gitme;
      if($fd2doluluk>=10 && $fd2gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement2");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($fd2doluluk<10 && $fd2gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement2");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($fd2doluluk>=10 && $fd2gitme<1 && $_SESSION['gend']=="female"){ ?>
        <script>
        var element = document.getElementById("meinElement2");
        element.style.borderColor = "#e81f69"; </script> <?php
      } ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      17:00 - 20:30
     </div> <br> <?php $cba2=date('d.m.Y',strtotime(' +1 day')); ?>
     <input type="checkbox" value="<?php echo $cba2 ?>" name="female">  <br> <br>
     <div class="gendfemale"> 
     Female
     </div>
    </div>
   </div>
   <div class="day">
    <div class="d">
    <?php
    $dayofweek3 = date('l',strtotime(' +2 day'));
    $date3 = date('d.m.Y',strtotime(' +2 day'));
    echo $dayofweek3; ?> <br> <?php  
    echo $date3;
   ?>
    </div>
    <div class="firstsession" id="myElement3"> 
     FITNESS <br>
     MEN
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($d3doluluk);  ?>
      </div>
      <?php  
      $d3gitme = $connect->query("select count(*) from seanslar where date = '$d3' AND name = '$isim' ")->fetchColumn();
      $_SESSION['gun3'] = $d3gitme;
      if($d3doluluk>=10 && $d3gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement3");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($d3doluluk<10 && $d3gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement3");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($d3doluluk>=10 && $d3gitme<1 && $_SESSION['gend']=="male"){ ?>
        <script>
        var element = document.getElementById("myElement3");
        element.style.borderColor = "#e81f69"; </script> <?php
      }?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      08:00 - 16.30
     </div> <br> <?php $abc3=date('d.m.Y',strtotime(' +2 day')); ?>
     <input type="checkbox" value="<?php echo $abc3 ?>" class="ma" name="male">  <br> <br>
     <div class="gendmale"> 
     Male
     </div>
    </div>
    <div class="secondsession" id="meinElement3"> 
     FITNESS <br>
     WOMEN 
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($fd3doluluk);  ?>
      </div>
      <?php  
      $fd3gitme = $connect->query("select count(*) from seanslar where date = '$d3' AND name = '$isim' ")->fetchColumn();
      $_SESSION['fgun3'] = $fd3gitme; 
      if($fd3doluluk>=10 && $fd3gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement3");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($fd3doluluk<10 && $fd3gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement3");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($fd3doluluk>=10 && $fd3gitme<1 && $_SESSION['gend']=="female"){ ?>
        <script>
        var element = document.getElementById("meinElement3");
        element.style.borderColor = "#e81f69"; </script> <?php
      } 
      ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      17:00 - 20:30
     </div> <br> <?php $cba3=date('d.m.Y',strtotime(' +2 day')); ?>
     <input type="checkbox" value="<?php echo $cba3 ?>" name="female">  <br> <br>
     <div class="gendfemale"> 
     Female
     </div>
    </div>
   </div>
   <div class="day">
    <div class="d">
    <?php
    $dayofweek4 = date('l',strtotime(' +3 day'));
    $date4 = date('d.m.Y',strtotime(' +3 day'));
    echo $dayofweek4; ?> <br> <?php  
    echo $date4;
    ?>
    </div>
    <div class="firstsession" id="myElement4"> 
     FITNESS <br>
     MEN
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($d4doluluk);  ?>
      </div>
      <?php  
      $d4gitme = $connect->query("select count(*) from seanslar where date = '$d4' AND name = '$isim' ")->fetchColumn();
      $_SESSION['gun4'] = $d4gitme;
      if($d4doluluk>=10 && $d4gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement4");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($d4doluluk<10 && $d4gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement4");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($d4doluluk>=10 && $d4gitme<1 && $_SESSION['gend']=="male"){ ?>
        <script>
        var element = document.getElementById("myElement4");
        element.style.borderColor = "#e81f69"; </script> <?php
      }?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      08:00 - 16.30 
     </div> <br> <?php $abc4= date('d.m.Y',strtotime(' +3 day')); ?>
     <input type="checkbox" value="<?php echo $abc4 ?>" class="ma" name="male">  <br> <br>
     <div class="gendmale"> 
     Male
     </div>
    </div>
    <div class="secondsession" id="meinElement4"> 
     FITNESS <br>
     WOMEN 
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($fd4doluluk);  ?>
      </div>
      <?php  
      $fd4gitme = $connect->query("select count(*) from seanslar where date = '$d4' AND name = '$isim' ")->fetchColumn(); 
      $_SESSION['fgun4'] = $fd4gitme;
      if($fd4doluluk>=10 && $fd4gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement4");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($fd4doluluk<10 && $fd4gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement4");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($fd4doluluk>=10 && $fd4gitme<1 && $_SESSION['gend']=="female"){ ?>
        <script>
        var element = document.getElementById("meinElement4");
        element.style.borderColor = "#e81f69"; </script> <?php
      } 
      ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      17:00 - 20:30
     </div> <br> <?php $cba4=date('d.m.Y',strtotime(' +3 day')); ?>
     <input type="checkbox" value="<?php echo $cba4 ?>" name="female">  <br> <br>
     <div class="gendfemale"> 
     Female
     </div>
    </div>
   </div>
   <div class="day">
    <div class="d">
    <?php
    $dayofweek5 = date('l',strtotime(' +4 day'));
    $date5 = date('d.m.Y',strtotime(' +4 day'));
    echo $dayofweek5; ?> <br> <?php  
    echo $date5;
    ?>
    </div>
    <div class="firstsession" id="myElement5"> 
     FITNESS <br>
     MEN
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($d5doluluk);  ?>
      </div>
      <?php  
      $d5gitme = $connect->query("select count(*) from seanslar where date = '$d5' AND name = '$isim' ")->fetchColumn();
      $_SESSION['gun5'] = $d5gitme;
      if($d5doluluk>=10 && $d5gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement5");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($d5doluluk<10 && $d5gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement5");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($d5doluluk>=10 && $d5gitme<1 && $_SESSION['gend']=="male"){ ?>
        <script>
        var element = document.getElementById("myElement5");
        element.style.borderColor = "#e81f69"; </script> <?php
      } 
      ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      08:00 - 16.30 
     </div> <br> <?php $abc5=date('d.m.Y',strtotime(' +4 day')); ?>
     <input type="checkbox" value="<?php echo $abc5 ?>" class="ma" name="male">  <br> <br>
     <div class="gendmale"> 
     Male
     </div>
    </div>
    <div class="secondsession" id="meinElement5"> 
     FITNESS <br>
     WOMEN 
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($fd5doluluk);  ?>
      </div>
      <?php  
      $fd5gitme = $connect->query("select count(*) from seanslar where date = '$d5' AND name = '$isim' ")->fetchColumn(); 
      $_SESSION['fgun5'] = $fd5gitme;
      if($fd5doluluk>=10 && $fd5gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement5");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($fd5doluluk<10 && $fd5gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement5");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($fd5doluluk>=10 && $fd5gitme<1 && $_SESSION['gend']=="female"){ ?>
        <script>
        var element = document.getElementById("meinElement5");
        element.style.borderColor = "#e81f69"; </script> <?php
      } 
      ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      17:00 - 20:30
     </div> <br> <?php $cba5=date('d.m.Y',strtotime(' +4 day')); ?>
     <input type="checkbox" value="<?php echo $cba5 ?>" name="female">  <br> <br>
     <div class="gendfemale"> 
     Female
     </div>
    </div>
   </div>
   <div class="day">
    <div class="d">
    <?php
    $dayofweek6 = date('l',strtotime(' +5 day'));
    $date6 = date('d.m.Y',strtotime(' +5 day'));
    echo $dayofweek6; ?> <br> <?php  
    echo $date6;
    ?>
    </div>
    <div class="firstsession" id="myElement6"> 
     FITNESS <br>
     MEN
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($d6doluluk);  ?>
      </div>
      <?php  
      $d6gitme = $connect->query("select count(*) from seanslar where date = '$d6' AND name = '$isim' ")->fetchColumn();
      $_SESSION['gun6'] = $d6gitme;
      if($d6doluluk>=10 && $d6gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement6");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($d6doluluk<10 && $d6gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement6");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($d6doluluk>=10 && $d6gitme<1 && $_SESSION['gend']=="male"){ ?>
        <script>
        var element = document.getElementById("myElement6");
        element.style.borderColor = "#e81f69"; </script> <?php
      } ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      08:00 - 16.30
     </div> <br> <?php $abc6=date('d.m.Y',strtotime(' +5 day')); ?>
     <input type="checkbox" value="<?php echo $abc6 ?>" class="ma" name="male">  <br> <br>
     <div class="gendmale"> 
     Male
     </div>
    </div>
    <div class="secondsession" id="meinElement6"> 
     FITNESS <br>
     WOMEN 
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($fd6doluluk);  ?>
      </div>
      <?php  
      $fd6gitme = $connect->query("select count(*) from seanslar where date = '$d6' AND name = '$isim' ")->fetchColumn(); 
      $_SESSION['fgun6'] = $fd6gitme;
      if($fd6doluluk>=10 && $fd6gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement6");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($fd6doluluk<10 && $fd6gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement6");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($fd6doluluk>=10 && $fd6gitme<1 && $_SESSION['gend']=="female"){ ?>
        <script>
        var element = document.getElementById("meinElement6");
        element.style.borderColor = "#e81f69"; </script> <?php
      } 
      ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      17:00 - 20:30
     </div> <br> <?php $cba6=date('d.m.Y',strtotime(' +5 day')); ?>
     <input type="checkbox" value="<?php echo $cba6 ?>" name="female">  <br> <br>
     <div class="gendfemale"> 
     Female
     </div>
    </div>
   </div>
   <div class="day">
    <div class="d">
    <?php
    $dayofweek7 = date('l',strtotime(' +6 day'));
    $date7 = date('d.m.Y',strtotime(' +6 day'));
    echo $dayofweek7; ?> <br> <?php  
    echo $date7;
    ?>
    </div>
    <div class="firstsession" id="myElement7"> 
     FITNESS <br>
     MEN
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($d7doluluk);  ?>
      </div>
      <?php  
      $d7gitme = $connect->query("select count(*) from seanslar where date = '$d7' AND name = '$isim' ")->fetchColumn();
      $_SESSION['gun7'] = $d7gitme;
      if($d7doluluk>=10 && $d7gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement7");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($d7doluluk<10 && $d7gitme>=1 && $_SESSION['gend']=="male"){ ?>
        <script> 
        var element = document.getElementById("myElement7");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($d7doluluk>=10 && $d7gitme<1 && $_SESSION['gend']=="male"){ ?>
        <script>
        var element = document.getElementById("myElement7");
        element.style.borderColor = "#e81f69"; </script> <?php
      } ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      08:00 - 16.30
     </div> <br> <?php $abc7=date('d.m.Y',strtotime(' +6 day')); ?>
     <input type="checkbox" value="<?php echo $abc7 ?>" class="ma" name="male">  <br> <br>
     <div class="gendmale"> 
     Male
     </div>
    </div>
    <div class="secondsession" id="meinElement7"> 
     FITNESS <br>
     WOMEN 
     <div class="sayi"> 
      <div class="bosluksayisi">
      <?php echo($fd7doluluk);  ?>
      </div>
      <?php  
      $fd7gitme = $connect->query("select count(*) from seanslar where date = '$d7' AND name = '$isim' ")->fetchColumn(); 
      $_SESSION['fgun7'] = $fd7gitme;
      if($fd7doluluk>=10 && $fd7gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement7");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }
        
      else if($fd7doluluk<10 && $fd7gitme>=1 && $_SESSION['gend']=="female"){ ?>
        <script> 
        var element = document.getElementById("meinElement7");
        element.style.borderColor = "#e8fd2f"; </script> <?php
      }

      else if($fd7doluluk>=10 && $fd7gitme<1 && $_SESSION['gend']=="female"){ ?>
        <script>
        var element = document.getElementById("meinElement7");
        element.style.borderColor = "#e81f69"; </script> <?php
      } 
      ?>
      <div class="gidensayisi">
      10
      </div>
     </div>
     <div class="saat">
      17:00 - 20:30
     </div> <br> <?php $cba7=date('d.m.Y',strtotime(' +6 day')); ?>
     <input type="checkbox" value="<?php echo $cba7 ?>" name="female">  <br> <br>
     <div class="gendfemale"> 
     Female
     </div>
    </div>
   </div>
    
  </div>
 </div>
 <div id="onayla">
  <div id="elecop"> Election Operations </div> <br> <br>
  <p> Do you confirm your reservation? You can cancel your confirmed reservations up to 3 hours before the session starts. </p>
  <div id="btnkaydet">
   <input type="submit" value="Save">
  </div>
  </form>
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