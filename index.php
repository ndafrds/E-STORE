<?php
//PANGGIL FAIL SAMBUNG KE PANGKALAN DATA
include_once("config.php");

//MEMPAPARKAN DATA MENGIKUT SUSUNAN DATA TERBARU DIMASUKKAN

$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>

<html>
<!DOCTYPE html>
<html>
<head>
<body bgcolor="#009933"><br><br>
<title>Homepage</title>
	<style>
		div.container{
			width: 100%;
			border: 1px solid brown;
		}
		header, footer {
			padding: 1em;
			color: white;
			background-color:green;
			clear: left;
			text-align: center;
		}

		article {
			margin-left: 170px;
			border-left: 1px solid brown;
			padding: 1em;
			overflow: hidden;
		}
		ul	{
			 list-style-type: none;
			 margin: 0;
			 padding: 20;
			 overflow: hidden;
			 background-color:white;
		}
		
		li	{
			 float: left;
		}
		
		li a {
			  display: block;
			  color: black;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
		}
		
		li a:hover {
			 background-color: white;
		}
		div.gallery{
		margin:5px;
		display:inline-table;
		width:180px;
		position:static;
		}
		div.desc{
		padding:15px;
		text align:center;
		}
		
		</style>

	
	<header>
		<img src="logo2.jpg" width=100%>
		<h1><font face="Courier New" color="white"> E-STORE</font></h1>
</header>

  <ul>
	  </ul>
	<head>
		<
		</head>
		<body>
		<center>
		<fieldset>
		<table width='80%' border=0>
			<tr bgcolor='#CCCCCC'>
				<td><center>Bil.</td></center>
				<td><center>Nama Produk</td></center>
				<td><center>Harga</td></center>
				<td><center>Tindakan</td></center>
			</tr>

	<?php
		$no=1;//NILAI PEMULA PEMBILANG

//MEMPAPARKAN DATA KE DALAM JADUAL YANG DIBINA
		while($res = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$no;
			echo "<td>".$res['nama']."</td>";
			echo "<td>".RM.$res['harga']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">kemaskini</a> |
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Adakah anda pasti?')
			\">hapus</a></td>";

			$no++; //BILANGAN INCREMENT
		}
			?>
			</table>
				<br><a href="add.php">Daftar Barang Baru</a>
				
				</center>
				</fieldset>
				</body>
				</html>