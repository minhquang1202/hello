

<?php
include('conn.php');
?>

<?php
    if(isset($_GET["id"])){
      $id = $_GET["id"];
    }
?>


<?php
      if (isset($_POST["sua"])){
      
        $ghichu = $_POST["ghichu"];


        $sql_update = "UPDATE profile SET 'ghichu = '$ghichu' WHERE id = $id ";

        $rss = mysqli_query($conn, $sql_update); 
        $row = mysqli_fetch_array($qr);


          header("location: yta.php");

      }

      


?>  






