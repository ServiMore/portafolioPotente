<!-- <?php
include"conection.php";

$ready="";
$id="";
    $sql = "SELECT * FROM user";

   $result = $conn->query($sql);
   $correo=$_GET['usuario'];
   $pass=$_GET['password'];
foreach($result as $r){
    $name=$r['nombre'];
    if($correo===$r['correo'] && $pass===$r['contraseña']){
      $id=$r['id'];
        $sqlote='select * from encuesta where user_id='.$r['id'];
        $result = $conn->query($sqlote);
       foreach ($result as $key => $value) {
           $ready= $value['ready'];
       }
       if($ready==0){

    //     echo '<script type="text/JavaScript"> 
    //     window.location = "encuesta.html?id='.$id.'";
    //  </script>'; 
    echo '<script type="text/JavaScript"> 
    window.location = "portafolio_miguel/index.html?y='.$name.'";
 </script>';    
       }
       else{
         echo '<script type="text/JavaScript"> 
        window.location = "portafolio_miguel/index.html?y='.$name.'";
     </script>';          
       }

    }

}
echo '<script type="text/JavaScript"> 
window.location = "index.html?x";
</script>';   
 
  
?> -->