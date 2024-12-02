<?php
// Fungsi enkripsi
function custom_encrypt($text, $key) {
    $encrypted = '';
    $keyLength = strlen($key);

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        $keyChar = $key[$i % $keyLength];
        $encryptedChar = chr(ord($char) ^ ord($keyChar)); // XOR
        $encrypted .= $encryptedChar;
    }

    return base64_encode($encrypted); // Encode hasil enkripsi
}

// Fungsi dekripsi
function custom_decrypt($encryptedText, $key) {
    $decrypted = '';
    $keyLength = strlen($key);
    $encryptedText = base64_decode($encryptedText); // Decode Base64

    for ($i = 0; $i < strlen($encryptedText); $i++) {
        $char = $encryptedText[$i];
        $keyChar = $key[$i % $keyLength];
        $decryptedChar = chr(ord($char) ^ ord($keyChar)); // XOR
        $decrypted .= $decryptedChar;
    }

    return $decrypted;
}
?>
