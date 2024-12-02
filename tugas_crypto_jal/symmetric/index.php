<!DOCTYPE html>
<html>
<head>
    <title>Tugas Kriptografi dan Steganografi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Tugas Kriptografi dan Steganografi : Symmetric Ecryption (AES)</h1>
    <form action="encrypt.php" method="post">
        <h2>Enkripsi</h2>
        <label for="text">Masukkan Teks:</label>
        <input type="text" name="text" id="text" required>
        <label for="key">Masukkan Kunci:</label>
        <input type="text" name="key" id="key" required>
        <button type="submit">Enkripsi</button>
    </form>

    <form action="decrypt.php" method="post">
        <h2>Dekripsi</h2>
        <label for="encrypted">Masukkan Teks Enkripsi:</label>
        <input type="text" name="encrypted" id="encrypted" required>
        <label for="key">Masukkan Kunci:</label>
        <input type="text" name="key" id="key" required>
        <button type="submit">Dekripsi</button>
    </form>
</body>
</html>
