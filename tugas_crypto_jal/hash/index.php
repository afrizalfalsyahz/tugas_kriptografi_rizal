<!DOCTYPE html>
<html>
<head>
    <title>Tugas Kriptografi: Hashing (SHA)</title>
</head>
<body>
    <h1>Tugas Kriptografi: Hashing</h1>
    <form action="hash.php" method="post">
        <label for="text">Masukkan Teks:</label>
        <input type="text" name="text" id="text" required>
        <button type="submit">Hash</button>
    </form>
    <br>
    <h2>Verifikasi Hash</h2>
    <form action="verify.php" method="post">
        <label for="text">Masukkan Teks:</label>
        <input type="text" name="text" id="text" required>
        <label for="hash">Masukkan Hash:</label>
        <input type="text" name="hash" id="hash" required>
        <button type="submit">Verify</button>
    </form>
</body>
</html>
