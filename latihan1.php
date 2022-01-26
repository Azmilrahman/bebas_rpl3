<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <center>
        <h2>Selamat Datang Di Yogyakarta</h2>
        <h4>Silahkan Pilih Destinasi</h4>
        <h5>1.Bukit Bintang</h5>
        <h5>2.Pantai Sadranan</h5>
        <h5>3.Candi Borobudur</h5>
        <h5>4.Candi Prambanan</h5>
        <h5>5.Keraton Yogyakarta</h5>
        <h5>6.Malioboro</h5>
        <h5>7.Pendopo Lawas</h5>
        <h5>8.Goa Pindul</h5>
</center>
<center>
<form method = "POST" action = "">
<table>
    <tr>
        <td>Pilih Destinasi</td>
        <td>:</td>
        <td><input type='number' name='pilih'></td>
    </tr>
    <tr>
        <td>Jumlah Tiket</td>
        <td>:</td>
        <td><input type='number' name='jumlah'></td>
    </tr>
    <tr>
        <td>Input Bayar</td>
        <td>:</td>
        <td><input type='number' name='bayar'></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan"  value='KIRIM'></td>
    </tr>   
</table> 
</form>
</center>

</form>
</html>
</body>

<?php

If(isset($_POST['simpan'])){  
    $pilih = $_POST['pilih'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];
If($pilih == 1){
    $harga = 10000;
    Echo "Jumlah tiket: $jumlah <br>";
}

else if($pilih == 2){
    $harga = 15000;
    Echo "Pantai sadranan : Rp. $harga <br>";
    Echo "Jumlah tiket : $jumlah <br>";

else if($pilih == 3){
    $harga = 50000;
    Echo "Candi borobudur: Rp. $harga <br>";
    Echo "Jumlah tiket: $jumlah <br>";

}

else if($pilih == 4 ) {
    $harga = 50000; 
    echo "Candi prambanan : Rp.$harga <br>";
    echo "Jumlah tiket: $jumlah <br>";

} 

else if($pilih = 5){
   $harga = 5000;
   Echo "Keraton Yogyakarta: Rp.$harga <br>"; 
   echo "Jumlah tiket: $jumlah <br>";

else if($pilih == 6){
   $harga = 5000;
   echo "Malioboro : Rp.$harga <br>";
   Echo "Jumlah tiket: $jumlah <br>";

}

else if($pilih == 7){
   echo "Pendopo Lawas"; 
}

else if(Spilih == 8) {
$harga = 100000;
echo "Goa pindul : Rp.harga <br>";
echo "Jumlah tiket : $jumlah <br>";
}

Echo "<h3>Diskon</h3>";

If($jumlah > 3){ $diskon 0.05;

Echo "Selamat kamu dapet diskon 5% <br>";

} elseif($jumlah < 3){

Echo "Kamu ga dapat diskon <br>";

} else{

Echo "No <br>";

}

Echo “"nput bayar Rp.Sbayar <br>"; 
$hitungdiskon == $harga * $jumlah * $diskon;

$totalharga ($harga * $jumlah) – $hitungdiskon; 
echo "total harga: Rp.Stotalharga <br>";

$kembalian = $bayar - $totalharga;

Echo "Kembalian : Rp.$kembalian <br>";

?>