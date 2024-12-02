<?php
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $key = $_POST['key'];

    // Enkripsi teks
    $encrypted = custom_encrypt($text, $key);

    echo "<h1>Hasil Enkripsi</h1>";
    echo "<p><strong>Teks Asli:</strong> $text</p>";
    echo "<p><strong>Teks Enkripsi (Base64):</strong> $encrypted</p>";
    echo "<a href='index.php'>Kembali</a>";
}
?>
