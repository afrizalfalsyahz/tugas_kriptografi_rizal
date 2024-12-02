<!DOCTYPE html>
<html>
<head>
    <title>Tugas Kriptografi: Asymmetric</title>
</head>
<body>
    <h1>Tugas Kriptografi: Asymmetric Encryption (RSA)</h1>
    <form action="encrypt.php" method="post">
        <label for="text">Masukkan Teks untuk Enkripsi:</label>
        <input type="text" name="text" id="text" required>
        <button type="submit">Encrypt</button>
    </form>
    <br>
    <form action="decrypt.php" method="post">
        <label for="text">Masukkan Data Terenkripsi:</label>
        <textarea name="encrypted" id="encrypted" required></textarea>
        <button type="submit">Decrypt</button>
    </form>
</body>
</html>
