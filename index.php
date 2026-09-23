<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-success'>Terima kasih <strong>$nama</strong>, pesan Anda telah berhasil dikirim ke server SMKN 5 Batam!</div>";
    }
}
?>