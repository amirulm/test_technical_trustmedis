<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN TAMBAH PEGAWAI</title>
</head>
<body>
    <h3>form tambah pegawai</h3>
    <form action="<?php echo base_url('home/fungsitambah'); ?>" method="post">
    <table>
        <tr>
            <td>pegawai id</td>
            <td>:</td>
            <td><input type="text" name="pegawai_id"></td>
        </tr>
        <tr>
            <td>pegawai no</td>
            <td>:</td>
            <td><input type="text" name="pegawai_no"></td>
        </tr>
        <tr>
            <td>pegawai nama</td>
            <td>:</td>
            <td><input type="text" name="pegawai_nama"></td>
        </tr>
        <tr>
            <td>pegawai jenis kelamin</td>
            <td>:</td>
            <td><input type="text" name="pegawai_jenis_kelamin"></td>
        </tr>
        <tr>
            <td>pegawai SIP</td>
            <td>:</td>
            <td><input type="text" name="pegawai_sip"></td>
        </tr>
        <tr>
            <td colspan ="3"><button type="submit">tambah pegawai</td>
        </tr>
    </table>
    </form>
</body>
</html>