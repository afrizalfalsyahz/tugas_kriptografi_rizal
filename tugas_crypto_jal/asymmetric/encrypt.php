<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $encrypted = rsa_encrypt($text);

    echo "<h1>Hasil Enkripsi</h1>";
    echo "<p>Teks: $text</p>";
    echo "<p>Hasil Enkripsi:</p>";
    echo "<textarea readonly>$encrypted</textarea>";
    echo "<br><a href='index.php'>Kembali</a>";
}
?>
