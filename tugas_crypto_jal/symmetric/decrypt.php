<?php
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $encryptedText = $_POST['encrypted'];
    $key = $_POST['key'];

    // Dekripsi teks
    $decrypted = custom_decrypt($encryptedText, $key);

    echo "<h1>Hasil Dekripsi</h1>";
    echo "<p><strong>Teks Enkripsi (Base64):</strong> $encryptedText</p>";
    echo "<p><strong>Teks Setelah Dekripsi:</strong> $decrypted</p>";
    echo "<a href='index.php'>Kembali</a>";
}
?>
