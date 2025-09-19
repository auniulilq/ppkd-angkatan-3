<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Angsuran Pembayaran</title>
</head>

<body>
    <h1>Simulasi Angsuran Pembayaran</h1>
    <form action="" method="post">
        <label for="">Jumlah Permohonan</label>
        <input type="number" name="jumlah">
        <br><br>
        <label for="">Jangka Waktu</label>
        <select name="jangka_waktu" id="">
            <option value="1">1 Bulan</option>
            <option value="3">3 Bulan</option>
            <option value="6">6 Bulan</option>
            <option value="12">12 Bulan</option>
            <option value="24">24 Bulan</option>
            <option value="36">36 Bulan</option>
            <option value="48">48 Bulan</option>
            <option value="60">60 Bulan</option>
            <!-- Rate -->
            <!-- 18,00% -->
        </select>
        <br><br>
        <button name="proses" type="submit">Proses</button>
    </form>
    <?php
    $hasil = 0;
    $hasilPerbulan = 0;

    if (isset($_POST['proses'])) {
        $jumlah = $_POST['jumlah'];
        $jangka_waktu = $_POST['jangka_waktu'];
        $rate = 0.18;

        // $rate = $rate[$jangka_waktu];
        $hasil = ($jumlah * $rate / $jangka_waktu) + ($jumlah / $jangka_waktu);
    }
    ?>
    <p><strong>NILAI ESTIMASI BAGI HASIL / BULAN : <?php echo  "Rp. " . number_format($hasil)  ?></strong></p>
</body>

</html>