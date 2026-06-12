<?php
session_start();
require_once '../config/database.php';

// PROSES LOGIN
if (isset($_POST['login'])) {
    $login_id = mysqli_real_escape_string($conn, $_POST['login_id']); 
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$login_id' OR email = '$login_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['full_name'] = $user['full_name'];

            if ($user['role'] === 'admin') {
                header("Location: ../admin/dashboard.php");
            } else {
                header("Location: ../index.php");
            }
            exit;
        } else {
            $_SESSION['error'] = "Kata sandi yang Anda masukkan salah!";
            header("Location: ../auth/login.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Identitas tidak ditemukan dalam arsip Capitol!";
        header("Location: ../auth/login.php");
        exit;
    }
}

// PROSES REGISTRASI
if (isset($_POST['register'])) {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Kata sandi dan konfirmasi tidak cocok!";
        header("Location: ../auth/register.php");
        exit;
    }

    $cek_query = "SELECT id FROM users WHERE username = '$username' OR email = '$email'";
    $cek_result = mysqli_query($conn, $cek_query);

    if (mysqli_num_rows($cek_result) > 0) {
        $_SESSION['error'] = "Username atau Email sudah terdaftar!";
        header("Location: ../auth/register.php");
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $insert_query = "INSERT INTO users (full_name, username, email, password, role) 
                     VALUES ('$full_name', '$username', '$email', '$hashed_password', 'user')";
    
    if (mysqli_query($conn, $insert_query)) {
        $_SESSION['success'] = "Registrasi berhasil! Silakan Masuk.";
        header("Location: ../auth/login.php");
        exit;
    } else {
        $_SESSION['error'] = "Terjadi kesalahan sistem!";
        header("Location: ../auth/register.php");
        exit;
    }
}
?>