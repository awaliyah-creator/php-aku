<?php
    $username = "siswa";
    $password = "1111";

    if ($username == "admin") {
       if ($password == "12345") {
        echo "Login berhasil sebagai Admin";
       } else {
        echo "Password Salah";
    } 
} else {
        echo "Username tidak di temukan";
    }
    if ($username == "siswa") {
       if ($password == "1111") {
        echo "Login berhasil sebagai Siswa";
       }
    }
?>