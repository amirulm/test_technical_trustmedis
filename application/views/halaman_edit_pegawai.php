<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman edit pegawai</title>
</head>
<body>
    <h3>FORM EDIT PEGAWAI</h3>
    <form action="<?php echo base_url('home/fungsiedit'); ?>" method="post">
    <table>
        <tr>
            <td>pegawai id</td>
            <td>:</td>
            <td><input type="text" name="pegawai_id" value="<?php echo $queryPGWdet->pegawai_id ?>" readonly></td>
        </tr>
        <tr>
            <td>pegawai no</td>
            <td>:</td>
            <td><input type="text" name="pegawai_nomor" value="<?php echo $queryPGWdet->pegawai_nomor ?>"></td>
        </tr>
        <tr>
            <td>pegawai nama</td>
            <td>:</td>
            <td><input type="text" name="pegawai_nama" value="<?php echo $queryPGWdet->pegawai_nama ?>"></td>
        </tr>
        <tr>
            <td>pegawai jenis kelamin</td>
            <td>:</td>
            <td><input type="text" name="pegawai_jenis_kelamin" value="<?php echo $queryPGWdet->pegawai_jenis_kelamin ?>"></td>
        </tr>
        <tr>
            <td>pegawai SIP</td>
            <td>:</td>
            <td><input type="text" name="pegawai_sip" value="<?php echo $queryPGWdet->pegawai_sip ?>"></td>
        </tr>
        <tr>
            <td colspan ="3"><button type="submit">UPDATE PEGAWAI</td>
        </tr>
    </table>
    </form>
</body>
</html>