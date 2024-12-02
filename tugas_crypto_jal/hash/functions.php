<?php
function create_hash($text) {
    // Hash menggunakan algoritma SHA-256
    return hash('sha256', $text);
}

function verify_hash($text, $hash) {
    // Bandingkan teks yang di-hash dengan hash yang diberikan
    return hash_equals(hash('sha256', $text), $hash);
}
?>
