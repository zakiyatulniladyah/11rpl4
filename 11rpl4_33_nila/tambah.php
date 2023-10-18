<!DOCTYPE html>
<html>
<head>
	<title>toko nila</title>
</head>
<body>
 
	<h2>toko nila</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH BARANG </h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>kode Barang</td>
				<td><input type="text" name="kodeBarang"></td>
			</tr>
			<tr>
				<td>nama Barang</td>
				<td><input type="number" name="namaBarang"></td>
			</tr>
			<tr>
				<td>satuan Barang</td>
				<td><input type="text" name="satuanBarang"></td>
			</tr>
            <tr>
				<td>stok Barang</td>
				<td><input type="text" name="stokBarang"></td>
			</tr>
            <tr>
				<td>harga Barang</td>
				<td><input type="text" name="hargaBarang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>