<?php
include("baglanti.php");

$pdf_id = $_POST['pdf_id'];
$sql = "SELECT dosya_adi, dosya_verisi FROM dosyalar WHERE id = $pdf_id";
$result = mysqli_query($baglan, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $pdf_ad = $row["dosya_adi"];
        $pdf_icerik = $row["dosya_verisi"];
    }
} else {
    echo "Veritabanında hiçbir sonuç bulunamadı.";
}

header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="' . $pdf_ad . '"');
header('Content-Length: ' . strlen($pdf_icerik));
header('Connection: close');
echo $pdf_icerik;

mysqli_close($conn);
?>



