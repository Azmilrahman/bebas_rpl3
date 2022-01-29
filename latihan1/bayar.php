<?php
if (isset($_POST['kirim'])) {
    $pilih =$_POST['pilih'];
    if ($pilih == 1) {
        $harga = 10000;
        ?>
        <center>
            <h2>Selamat Datang Di Bukit Bintang</Datag></h2>
            <br>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Harga Tiket Per Orang</td>
                        <td>:</td>
                        <td><?php echo $harga; ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Tiket</td>
                        <td>:</td>
                        <td><input type="number" name="jumlah"></td>
                    <td><button type="submit" name="kirim1">Kirim</button></td>
                    </tr>
                </table>
            </form>
        </center>
        <?php if (isset($_POST['kirim1'])) {
        $Jumlah = $_POST['jumlah'];
        $total = $jumlah * 10000;

        if ($jumlah >= 10) {

            $diskon = $total * 0.10;
            $totalharga = $total - $diskon;
        }
        else if ($jumlah >= 5) {
            $diskon = $total * 0.5;
            $totalharga = $total - $diskon;
        } else {
            $diskon = 0;
            $totalharga = $jumlah - $diskon;
        } ?>
        
        }
    }
}