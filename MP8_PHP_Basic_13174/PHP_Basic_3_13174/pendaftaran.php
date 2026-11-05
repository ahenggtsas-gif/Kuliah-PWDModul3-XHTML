<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nama = $_POST['nama'] ?? '';
        $verifikasi = $_POST['verifikasi'] ?? '';
        $telepon = $_POST['telepon'] ?? '';
        $validasi = true;
        if(empty($nama)){
            echo "<p style = 'color:red;'>Nama tidak boleh kosong.</p>";
            $validasi = false;
        }
        if(empty($verifikasi)){
            echo "<p style = 'color:red;'>Silahkan pilih metode verifikasi.</p>";
            $validasi = false;
        }
        if(empty($telepon)){
            echo "<p style = 'color:red;'>Nomor telepon tidak boleh kosong.</p>";
            $validasi = false;
        }

        if(!preg_match("/^[a-zA-Z ]*$/", $nama)){
            echo "<p style = 'color:red;'>Nama hanya boleh mengandung huruf.</p>";
            $validasi = false;
        }
        if(!preg_match("/^[a-zA-Z ]*$/", $verifikasi)){
            echo "<p style = 'color:red;'>Metode verifikasi hanya boleh mengandung huruf.</p>";
            $validasi = false;
        }
        if(!preg_match("/^(\+62|08)[0-9]{9,11}$/", $telepon)){
            echo "<p style = 'color:red;'>Nomor telepon hanya boleh mengandung angka dan jumlah 9 sampai 11 digit setelah +62 /08.</p>";
            $validasi = false;
        }

        if($validasi){
            echo "<p style = 'color:green;'>Pendaftaran akun berhasil.</p>";
            echo "<p>Nama: " . htmlspecialchars($nama) . "</p>";
            echo "<p>Metode Verifikasi: " . htmlspecialchars($verifikasi) . "</p>";
            echo "<p>Nomor Telepon: " . htmlspecialchars($telepon) . "</p>";
        }



    }else{
        echo "<p style = 'color:red;'>Silahkan lengkapi formulir di atas.</p>";
    }


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
        <title>Pendaftaran Akun</title>
    </head>
    <body>
        <h1>Pendaftaran Akun</h1>
        <form method="post" action="">
            <p style="font-weight: bold; font-size: 18px;">Total Pembayaran : Rp50.000</p>
            <p>Masukkan nama : <br /><input type="text" name="nama" /></p>
            <p>Masukkan nomor telepon : <br /><input type="text" name="telepon" /></p>
            <p>Masukkan pilihan verifikasi: <br />
                <input type="radio" name="verifikasi" value="WhatsApp" /> WhatsApp <br />
                <input type="radio" name="verifikasi" value="SMS" /> SMS <br />
            </p>
            <button type = "submit">Kirim</button>
        </form>




    </body>
</html>