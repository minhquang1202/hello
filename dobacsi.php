<?php
    include 'conn.php';
    ?>

<?php
            $username = $_POST['username'];
            $benhnhan = $_POST['benhnhan'];
            $benhan = $_POST['benhan'];
            $ca = $_POST['ca'];
            $phongmo = $_POST['id_phongmo'];
            $ngay = $_POST['ngay'];
            $yta = $_POST['yta'];
            $email = $_POST['email'];

$tiensu = $_POST['tiensu'];




            $submit = $_POST["submit"];
            


$sql = "INSERT INTO profile (username, benhnhan, benhan, ca, id_phongmo, ngay, yta, tiensu, email) 
        VALUES ('$username', '$benhnhan', '$benhan', '$ca', '$phongmo', '$ngay', '$yta', '$tiensu', '$email')";



if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Them ho so benh an thanh cong")</script>';
  require_once 'bacsi.php';
} else {
  echo '<script>alert("Nhap thieu thong tin")</script>' . $sql . "<br>" . $conn->error;
  require_once 'bacsi.php';
}

?>
