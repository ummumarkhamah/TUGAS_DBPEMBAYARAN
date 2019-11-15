<?php
include("koneksi.php");
if (isset($_POST ['simpan'])){ 
	$query_tambah_data="insert into barang (merk,harga)values
	(' ".$_POST['merk']." ',
	' ".$_POST['harga']." ')";
	$proses_data=mysql_query($query_tambah_data);
if($proses_data){
	echo 'Tambah data berhasil';
}else{
	echo mysql_error();
}

}

?>

<!---from untuk kirim ke database--->
<form method="POST" action="">
<table>
	<tr>
		<td> Nama Barang </td>
		<td><input name="merk" type="text"></td><!---name isi sesuai field di phpmyadmin--->
	</tr>
	<tr>
		<td> Harga </td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>

<a href="pembayaran.php"><h2>Pembayaran</h2></a>