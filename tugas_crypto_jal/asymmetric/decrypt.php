<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $encrypted = $_POST['encrypted'];
    $decrypted = rsa_decrypt($encrypted);

    echo "<h1>Hasil Dekripsi</h1>";
    echo $decrypted ? "<p>Teks Asli: $decrypted</p>" : "<p>Gagal Mendekripsi!</p>";
    echo "<a href='index.php'>Kembali</a>";
}
?>
