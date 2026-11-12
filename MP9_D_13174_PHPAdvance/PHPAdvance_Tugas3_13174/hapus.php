<?php
    require 'koneksi.php';

    //2. ambil id dari link (hapus.php?id= ) memakai get
    $id = $_GET['id'];

    //3. Validasi id, jika kosong / bukan angka dengan ctype_digit

    if(!ctype_digit($id) || $id <1){
            echo '<p style="color:red;">!! ID TIDAK VALID !!</p>';
    }else{
        $stmt = mysqli_prepare($conn, 'DELETE FROM film WHERE id = ?');
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_affected_rows($stmt);

        if($result == 1){
            echo '<p> Data berhasil dihapus</p>';
        }else{
            echo '<p style="color:red;">!! Data tidak ditemukan !!</p>';
        }    
    }
    echo '<a href="index.php">Kembali</a>';
?>  