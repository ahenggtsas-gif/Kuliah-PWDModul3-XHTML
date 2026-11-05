<?php
$menu = $GET['menu'] ?? '';

$halaman = [
    'A' => 'pendaftaran.php',
    'B' => 'belanja.php',
];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
        <title>Layanan MySimCar</title>
    </head>
        <h1>Beranda Website MySimCard</h1>
        <div style ="border: 0.1px solid black; padding: 3px;">
            <a href = "?menu=A">Pendaftaran Akun</a>
        </div>
        <div style ="border: 0.1px solid black; padding: 3px;">
            <a href ="?menu=B" style=""text-decoration></a>
        </div>

</html>