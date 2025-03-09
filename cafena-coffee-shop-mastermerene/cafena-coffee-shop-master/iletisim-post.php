<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "kullanıcılar";

$conn = new mysqli($servername, $username, $password, $database);

if ($_POST) {
  $isim= $_POST['isim'];
  $soyisim=$_POST['soyisim'];
  $email=$_POST ['email'];
  $telefon=$_POST ['telefon'];
  $message=$_POST ['message'];

  $sql = "INSERT INTO bilgiler (isim, soyisim, email, telefon, message)
  VALUES ('$isim', '$soyisim', '$email', '$telefon', '$message')";

if ($conn->query($sql) === TRUE) {
echo "Bilgiler başarıyla kaydedildi!";
} else {
echo "Hata: " . $sql . "<br>" . $conn->error;
}
header("Location:index1.php?success=1");
}



?>
