<?php 
$ip_adresi = $_SERVER['REMOTE_ADDR'];
$file = 'zk.txt';

// Dosyayı oku ve her satırı bir diziye atayın
$ip_listesi = array();
if (file_exists($file)) {
    $ip_listesi = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

// Eğer IP adresi dosyada yoksa, dosyaya IP adresini ekle
if (!in_array($ip_adresi, $ip_listesi)) {
    file_put_contents($file, $ip_adresi . "\n", FILE_APPEND);
}



?>