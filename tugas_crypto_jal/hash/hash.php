<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $hash = create_hash($text);

    echo "<h1>Hasil Hash</h1>";
    echo "<p>Teks: $text</p>";
    echo "<p>Hash: $hash</p>";
    echo "<a href='index.php'>Kembali</a>";
}
?>
