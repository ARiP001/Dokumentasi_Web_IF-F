<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan PHP</title>
</head>
<body>
<h3>Selamat datang di tampilan Kalkulator ft PHP</h3>
<?php
    if (isset($_POST['ang1']) &&isset($_POST['ang2'])&&isset($_POST['operasi'])) {
        
        $ang1 = $_POST['ang1'];
        $ang2 = $_POST['ang2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        if ($operasi == "tambah") $hasil = $ang1 + $ang2;
        else if ($operasi == "kurang") $hasil = $ang1 - $ang2;
        else if ($operasi == "kali") $hasil = $ang1 * $ang2;
        else if ($operasi == "bagi") $hasil = $ang1 / $ang2;
        ?>

        <label for="">hasil</label>
        <input type="text" name="hasil" id="hasil" value="<?= "$hasil";?>">
        
        <?php
    }else  echo "Form ada yg tidak dipilih/kosong (dino ajur) <br>";?>
</body>
</html>