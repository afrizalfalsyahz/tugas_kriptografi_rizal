<?php
function rsa_encrypt($text) {
    $publicKey = file_get_contents('keys/public.pem');
    openssl_public_encrypt($text, $encrypted, $publicKey);
    return base64_encode($encrypted); // Encode hasil untuk ditampilkan
}

function rsa_decrypt($encrypted) {
    $privateKey = file_get_contents('keys/private.pem');
    $encrypted = base64_decode($encrypted); // Decode hasil enkripsi
    openssl_private_decrypt($encrypted, $decrypted, $privateKey);
    return $decrypted;
}
?>
