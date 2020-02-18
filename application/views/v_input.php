<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | fadlihdata</title>
</head>
<body>
	<center>
		<h1>Pengambilan Barang | fadlihdata</h1>
		<h3>1218019</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Kode Barang</td>
				<td><input type="text" name="Kode Barang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="Nama Barang"></td>
			</tr>
			<tr>
				<td>Jumlah Pesanan</td>
				<td><input type="text" name="Jumlah Pesanan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="KIRIM"></td>
			</tr>
		</table>
	</form>	
</body>
</html>