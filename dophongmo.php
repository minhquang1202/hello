<?php
    include 'conn.php';
    ?>

<?php
            $tenvattu = $_POST['tenvattu'];
            $tinhtrang = $_POST['tinhtrang'];

            $tenphongmo = $_POST['tenphongmo'];




            $submit = $_POST["submit"];
            


$sql = "INSERT INTO phongmo (tenvattu, tinhtrang, tenphongmo) 
        VALUES ('$tenvattu', '$tinhtrang', '$tenphongmo')";



if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Them ho so benh an thanh cong")</script>';
  require_once 'phongmo.php';
} else {
  echo '<script>alert("Nhap thieu thong tin")</script>' . $sql . "<br>" . $conn->error;
  require_once 'phongmo.php';
}

?>
