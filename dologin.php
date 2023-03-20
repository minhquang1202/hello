<?php 
    session_start();
?>

<?php
include 'conn.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * from user where username='$username' and password='$password'";

  $rs = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($rs);

 if($row["role"]==1){
   $_SESSION["username"]=$username;
   header("location:bacsi.php");          //ddt
 }  elseif($row["role"]==2){
    $_SESSION["username"]=$username;
    header("location:nhanvienvattuquanlycamo.php");  //nhanvienvattu
 } else{
    $_SESSION["username"]=$username;
    header("location:yta2.php");             //yta
 }

?>