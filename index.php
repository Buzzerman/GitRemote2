<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Penjumlahan</h2>
    <form method="post">
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        +
        <input type="number" name="angka2" placeholder="Angka kedua" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $hasil = $_POST['angka1'] + $_POST['angka2'];
        echo "<h3>Hasil: $hasil</h3>"
        <p>Hai</p>
        <p>Halo</p>

        <ul>
            <li>esateu</li>
            <li>deua</li>
            <li>tiga</li>
        </ul>;
    }
    ?>
</body>
</html>
