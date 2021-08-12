<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman edit klinik</title>
</head>
<body>
    <h3>FORM EDIT PEGAWAI</h3>
    <form action="<?php echo base_url('home/fungsieditklinik'); ?>" method="post">
    <table>
    <tr>
            <td>klinik id</td>
            <td>:</td>
            <td><input type="text" name="unit_id" value = "<?php echo $queryeditkli->unit_id ?>"></td>
        </tr>
        <tr>
            <td>klinik kode</td>
            <td>:</td>
            <td><input type="text" name="unit_kode"value = "<?php echo $queryeditkli->unit_kode ?>"></td>
        </tr>
        <tr>
            <td>klinik nama</td>
            <td>:</td>
            <td><input type="text" name="unit_nama"value = "<?php echo $queryeditkli->unit_nama ?>"></td>
        </tr>
        <tr>
            <td colspan ="3"><button type="submit">edit klinik</td>
        </tr>
    </table>
    </table>
    </form>
</body>
</html>