<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php 
        $nama = "arif fathur";

        echo ("halo dunia ft PHP<br>");
        echo (date ("d/m/Y"));
        echo "<br>selamat datang, $nama";
        echo "<br><br>";
    ?> -->
    <h1>Kalkulator sederhana PHP</h1>
    <form action="tampilan.php" method="POST">
        <table>
            <tr>
                <td>Angka 1</td>
                <td>:</td>
                <td><input type="text" name="ang1" id="ang1"></td>
            </tr>
            <tr>
                <td>Angka 2</td>
                <td>:</td>
                <td><input type="text" name="ang2" id="ang2"></td>
            </tr>
            <!-- <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select id="jurusan" name="jurusan">
                        <option value="Informatika">Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        </select>
                </td>
            </tr> -->
            <tr>
                <td>Operasi</td>
                <td>:</td>
                <td>
                <input type="radio" id="tambah" name="operasi" value="tambah">
                <label for="">tambah</label>
                <input type="radio" id="kurang" name="operasi" value="kurang">
                <label for="">kurang</label>66
                <input type="radio" id="kali" name="operasi" value="kali">
                <label for="">kali</label>
                <input type="radio" id="bagi" name="operasi" value="bagi">
                <label for="">bagi</label>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
            <tr>
                <td><input type="reset" value="reset"></td>
            </tr>
            
        </table>
        

    </form>
</body>
</html>