<!-- <?php
include"conection.php";
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];
$p6=$_POST['p6'];
$p7=$_POST['p7'];
$p8=$_POST['p8'];
$id=$_POST['id'];

// $sqlote="INSERT INTO encuesta(p1,p2,p3,p4,p5,p6,p7,p8,ready) VALUES($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,'1') where user_id=".$id;
$sqlote="UPDATE encuesta SET p1='$p1', p2='$p2', p3='$p3', p4='$p4', p5='$p5', p6='$p6', p7='$p7', p8='$p8', ready=1 WHERE user_id=$id";
            $conn->query($sqlote);
            echo '<script type="text/JavaScript"> 
            window.location = "portafolio_miguel/index.html";
         </script>'; 
?> -->