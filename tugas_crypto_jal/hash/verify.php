<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $hash = $_POST['hash'];

    $isValid = verify_hash($text, $hash);
    echo "<h1>Hasil Verifikasi</h1>";
    echo $isValid ? "<p>Hash valid untuk teks ini.</p>" : "<p>Hash tidak valid.</p>";
    echo "<a href='index.php'>Kembali</a>";
}
?>
