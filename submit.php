<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Lakukan pengolahan data formulir sesuai kebutuhan

    // Contoh: Tampilkan pesan terimakasih
    echo "<h2>Terima kasih atas pendaftarannya, $name!</h2>";
}
?>