<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>halaman utama</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>TECHNICAL TEST</h1>

	<a href="<?php echo base_url('home/halaman_tambah_pegawai') ?>">TAMBAH PEGAWAI</a>
	<br>
	<br>
		<table border="1">
			<tr>
				<td>pegawai id</td>
				<td>pegawai no</td>
				<td>pegawai nama</td>
				<td>pegawai jenis kelamin</td>
				<td>pegawai SIP</td>
				<td>botton</td>
			</tr>
			<?php foreach ($pegawai as $p) { ?>
			<tr>
				<td><?php echo $p->pegawai_id; ?></td>
				<td><?php echo $p->pegawai_nomor; ?></td>
				<td><?php echo $p->pegawai_nama; ?></td>
				<td><?php echo $p->pegawai_jenis_kelamin; ?></td>
				<td><?php echo $p->pegawai_sip; ?></td>
				<td><a href="<?php echo base_url('home/halaman_edit_pegawai') ?>/<?php echo $p->pegawai_id ?>">
				edit</a> | <a href="<?php echo base_url('home/fungsidelete') ?>/<?php echo $p->pegawai_id ?>">delete</a></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<a href="<?php echo base_url('home/tambah_klinik') ?>">TAMBAH KLINIK</a>
	<br>
	<br>
		<table border="1">
			<tr>
				<td>klinik id</td>
				<td>klinik kode</td>
				<td>klinik nama</td>
				<td>botton</td>
			</tr>
			<?php foreach ($unit as $u) { ?>
			<tr>
				<td><?php echo $u->unit_id; ?></td>
				<td><?php echo $u->unit_kode; ?></td>
				<td><?php echo $u->unit_nama; ?></td>
				<td><a href="<?php echo base_url('home/edit_klinik') ?>/<?php echo $u->unit_id ?>">
				edit</a> | <a href="<?php echo base_url('home/fungsideleteklinik') ?>/<?php echo $u->unit_id ?>">delete</a></td>
			</tr>
			<?php } ?>
		</table>
</body>
</html>