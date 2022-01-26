<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <fieldset>
        <center>
            <h1>Selamat Datang Di Yogyakarta Silahkan Pilih Destinasi Liburan </h1>
            <form action="bayar.php" method="post">
                <table>
                    <tr>
                        <th></th>
                        <th align="left">Destinasi</th>
                        <th>Harga Tiket</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Bukit Bintang</td>
                        <td>Rp.10.000</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Pantai Sadranan</td>
                        <td>Rp.15.000</td>
                    </tr>
                    <tr>
                    <td>3.</td>
                    <td>Candi Borobudur</td>
                    <td>Rp. 50.000</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Candi Prambanan</td>
                    <td>Rp. 50.000</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Keraton Yogyakarta</td>
                    <td>Rp. 5.000</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Malioboro</td>
                    <td>Rp. 5.000</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Pendopo Lawas</td>
                    <td>Ke Cafe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Goa Pindul</td>
                    <td>Rp. 100.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name="pilih" id="">
                            <option selected>Pilih Destinasi</option>
                            <option value="1">Bukit Bintang</option>
                            <option value="2">Pantai Sadranan</option>
                            <option value="3">Candi Borobudur</option>
                            <option value="4">Candi Prambanan</option>
                            <option value="5">Keraton Yogyakarta</option>
                            <option value="6">Malioboro</option>
                            <option value="7">Pendopo Lawas</option>
                            <option value="8">Goa Pindul</option>
                        </select>
                    </td>
                </tr>
                <td><button type="submit" name="kirim">Kirim</button></td>
                </table>
            </form>
        </center>
    </fieldset>
</body>
</html>