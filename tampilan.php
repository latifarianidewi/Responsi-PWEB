<html>
	<head>
		<title>Toko Makanan</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body bgcolor="#D35400">
		<div align="center" ><strong><font size="6" face="Courier New, Courier, mono">DUNKIN DONUTS </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>Pesanan Makanan</td>
						<td>
							<select name="makanan" id="makanan">
								<option>Almond</option>
								<option>Smiley</option>
								<option>Cheese Croissant</option>
								<option>Strawberry Frost</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Jumlah</td>
						<td>
							<select name="jumlah" id="jumlah">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>Lebih</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Pesanan Minuman</td>
						<td>
							<select name="minuman" id="minuman">
								<option>Cappuccino</option>
								<option>Vanilla</option>
								<option>Chocolate</option>
								<option>Tea</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Jumlah</td>
						<td>
							<select name="jumlah2" id="jumlah2">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>Lebih</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Komentar</td>
						<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat Orderan::
		</a></strong></div>
	</body>
</html>