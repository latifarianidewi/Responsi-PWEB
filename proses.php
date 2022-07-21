<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$makanan = $_POST['makanan'];
$jumlah = $_POST['jumlah'];
$minuman = $_POST['minuman'];
$jumlah2 = $_POST['jumlah2'];
$komentar = $_POST['komentar'];

echo "<head><title>Toko Makanan</title></head>";
$fp = fopen("dunkindonuts.txt", "a+");
fputs($fp, "$nama|$alamat|$makanan|$jumlah|$minuman|$jumlah2|$komentar\n");
fclose($fp);

echo "Terima kasih atas orderannya<br>";
echo "<a href='tampilan.php'>Isi Orderan</a><br>";
echo "<a href='lihat.php'>Lihat Orderan</a><br>";

 ?>



