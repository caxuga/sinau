<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $email  = htmlspecialchars($_POST["email"]);

    $data = "<p><b>Nama:</b> $nama<br><b>Alamat:</b> $alamat<br><b>Email:</b> $email</p>\n";
    $file = "data.html";
    if (!file_exists($file)) {
        file_put_contents($file, "<!DOCTYPE html>\n<html><head><title>Data</title></head><body>\n<h2>Data Terkirim</h2>\n");
    }
    file_put_contents($file, $data, FILE_APPEND);
    header("Location: $file");
    exit;
} else {
    echo "Request tidak valid.";
}
?>