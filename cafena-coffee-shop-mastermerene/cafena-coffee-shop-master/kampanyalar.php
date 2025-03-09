<?php
$servername = "localhost";
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$dbname = "kafe_db"; // Veritabanı adı

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Kampanyaları veritabanından al
$sql = "SELECT kampanya_basligi, kampanya_aciklama, resim_yolu FROM kampanyalar where curdate() BETWEEN baslangic_tarih and bitis_tarih";
$result = $conn->query($sql);

echo '<div class="campaigns-slider">';
echo '<div class="slider-container">';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="slide">';
        echo '<img src="' . $row['resim_yolu'] . '" alt="' . $row['kampanya_basligi'] . '" class="slider-image">';
        echo '<div class="slide-content">';
        echo '<p>' . $row['kampanya_aciklama'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Hiç kampanya bulunmamaktadır.";
}

echo '</div>';
echo '</div>';

echo '</div>';

// Bağlantıyı kapat
$conn->close();
?>
