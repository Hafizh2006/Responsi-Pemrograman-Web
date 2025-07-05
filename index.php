<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ambil nilai dari form
    $email = trim($_POST["akun"]);
    $password = $_POST["password"];
    $konfimasiPassword = $_POST["konfimasiPassword"];
    $persetujuan = isset($_POST["persetjuan"]) ? $_POST["persetujuan"] : null;

    $errors = [];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

 
    if (strlen($password) < 8) {
        $errors[] = "Password minimal harus 8 karakter.";
    }


    if ($password !== $konfimasiPassword) {
        $errors[] = "Konfirmasi password tidak sama.";
    }


    if (!$persetujuan) {
        $errors[] = "Anda harus menyetujui syarat dan ketentuan.";
    }

    // Cek hasil
    if (empty($errors)) {
        echo "<p style='color:green'>Registrasi berhasil!</p>";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red'>$error</p>";
        }
    }
}
?>