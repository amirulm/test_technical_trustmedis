<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman tambah klinik</title>
</head>
<body>
    <h3>FORM TAMBAH KLINIK</h3>
    <form action="<?php echo base_url('home/fungsitambahklinik'); ?>" method="post">
    <table>
        <tr>
            <td>klinik id</td>
            <td>:</td>
            <td><input type="text" name="unit_id"></td>
        </tr>
        <tr>
            <td>klinik kode</td>
            <td>:</td>
            <td><input type="text" name="unit_kode"></td>
        </tr>
        <tr>
            <td>klinik nama</td>
            <td>:</td>
            <td><input type="text" name="unit_nama"></td>
        </tr>
        <tr>
            <td colspan ="3"><button type="submit">tambah klinik</td>
        </tr>
    </table>
    </form>
</body>
</html>