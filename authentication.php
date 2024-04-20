<?php
    // Mulai session
    session_start();

    include_once('koneksi.php');

    // Mendapatkan data dari form login
    $username = $_POST['username'];
    $plainTextPassword = $_POST['password'];

    // Query untuk mencari user di database
    $result = $conn->query("SELECT * FROM pengguna WHERE username = '$username'");

    // Cek apakah user ditemukan
    if ($result->num_rows > 0) {
        $pengguna = $result->fetch_assoc();
        $hashedPassword = $pengguna['password']; // Ambil hash password dari database

        // Verifikasi password
        if (password_verify($plainTextPassword, $hashedPassword)) {
            // Password cocok
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
        } else {
            // Password tidak cocok
            echo "Password salah.";
        }
    } else {
        echo "User tidak ditemukan.";
    }

    $conn->close();
?>