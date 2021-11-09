<!-- <?php  
include"conection.php";
$user=$_GET['user'];
$pass=$_GET['pass'];
$mail=$_GET['mail'];
$date=$_GET['date'];

$sql = "SELECT * FROM user";
$temp="";
$result = $conn->query($sql);
$exist=false;
foreach($result as $r){
    if($mail===$r['correo']){
        echo '<div class="alert alert-info" role="alert">
        Usuario existente <a href="index.html" class="alert-link">Inicia sesion</a>. Give it a click if you like.
      </div>
     ';
     $exist=true;
break;
    }
}
    if(!$exist){

        $sql= "INSERT INTO user(nombre,contraseña,correo,fecha_nacimiento) VALUES('$user','$pass', '$mail', '$date')";
        $conn->query($sql);
        $ID="SELECT * from user where correo='".$mail."'";
        $resultado= $conn->query($ID);
        foreach ($resultado as $key => $value) {
            $temp=$value['id'];
            $sqlote="INSERT INTO encuesta(user_id) VALUES($temp)";
            $conn->query($sqlote);
        }
       
        
      echo '<script type="text/JavaScript"> 
        window.location = "portafolio_miguel/index.html?y='.$name.'";
     </script>'; 
    }else{
        echo ' <script type="text/JavaScript"> 
        window.location.href = "registro.html?e";
        </script>
';
    }
?> -->