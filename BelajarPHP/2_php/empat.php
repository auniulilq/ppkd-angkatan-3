<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Deposito</title>
</head>

<body>
    <a href="empat.php?deposito">Perhitungan Deposito</a>
    <a href="empat.php?pembiayaan">Perhitungan Pembiayaan</a>

    <?php
    if (isset($_GET['pembiayaan'])): ?>
        <h1>Pembiayaan</h1>
    <?php elseif (isset($_GET['deposito'])) : ?>
        <h1>Perhitungan Deposito</h1>
        <form action="" method="post">
            <label for="">Nominal Deposito</label>
            <input type="number" name="nominal" id="" class="">
            <br><br>
            <label for="">Jangka Waktu</label>
            <select name="jangka_waktu" id="">
                <option value="1">1 Bulan</option>
                <option value="3">3 Bulan</option>
                <option value="6">6 Bulan</option>
                <option value="12">12 Bulan</option>

                <!-- Rate -->
                <!-- 4,91% = 1 Bulan
             6,37% = 3 Bulan
             6,77% = 6 Bulan
             7,83% = 12 Bulan -->
            </select>
            <br><br>
            <button name="proses" type="submit">Proses</button>

        </form>
        <?php

        $hasil = 0;
        $hasilPerbulan = 0;
        if (isset($_POST['proses'])) {
            $nominal = $_POST['nominal'];
            $jangka_waktu = $_POST['jangka_waktu'];
            $rate = [1 => 4.91, 3 => 6.37, 6 => 6.77, 12 => 7.83];

            $rate = $rate[$jangka_waktu];
            // (nominal * $rate / 12 * jangka_waktu)
            $hasil = ($nominal * ($rate / 100)) / 12 * $jangka_waktu;
            $hasilPerbulan = $hasil / $jangka_waktu;
        }
        ?>

        <p><strong>NILAI ESTIMASI BAGI HASIL / TAHUN : <?php echo  "Rp. " . number_format($hasil)  ?></strong></p>
        <p><strong>NILAI ESTIMASI BAGI HASIL / BULAN : <?php echo  "Rp. " . number_format($hasilPerbulan)  ?></strong></p>

    <?php endif ?>
</body>

</html>