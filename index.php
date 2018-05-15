<?php

	ob_start();
	session_start();
	if (!isset($_SESSION['username'])) header("location:form_login.php");
	include "koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Input Data Karyawan CV. Tarmiku Sejahtera</title> 
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
</head>
<body>
<br>
<table width="1306" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td width="10" bgcolor="#5bc0de">&nbsp;</td>
	<td width="140" height="120" bgcolor="#5bc0de"><div align="center"><img src="images/logo_tarmiku.png" width="100px"></div></td>
	<td width="10" bgcolor="#5bc0de">&nbsp;</td>
	<td width="1136" bgcolor="#5bc0de"><div align="center"><span class="header">APLIKASI INPUT DATA KARYAWAN<br><br></span>
	<b>CV. Tarmiku Sejahtera</b><span class="header"><br></span></div></td>
	<td width="10" bgcolor="#5bc0de"></td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td height="27"><div align="left"><? echo "Tanggal : ".date("d-M-y");?></div></td>
	<td>&nbsp;</td>
	<td align="right"><?php $id_admin = $_SESSION['id_admin']; 
						$query= mysqli_query($koneksi, "SELECT * FROM admin where id_admin='$id_admin'");
						$data = mysqli_fetch_array($query);
						
					;?>
	&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td rowspan="4" valign="top"><table width="144" height="400" bgcolor="#80FF00" border="0" cellspacing="0" cellpadding="0" align="top">
		<tr>
			<div class="col-md-12 sidebar">
				<h4><b>MAIN MENU</b></h4>
				<ul class="nav nav-sidebar">
					<li class="active"><a href="index.php?page=index" title="home">&nbsp;Home</a></li>
					<li><a href="index.php?page=forminputkaryawan" title="input data">&nbsp;Input <span class="sr-only">(current)</span></a</li>
					<li><a href="index.php?page=lihat" title="lihat data">&nbsp;Lihat</a></li>
					<!--<li><a href="index.php?page=formcari" title="cari data">&nbsp;Cari</a></li>-->
					<li><a href="logout.php?berhasil-logout" title="cari data">&nbsp;Logout</a></li>
				</ul>
				<!--<div class="btn-group-vertical" role="button" aria-label="..." align="center" width="100%">
				<li><a href="index2.php" title="Balik">&nbsp;Home</a></li>
				<button type="button" class="btn btn-lg"><a href="index2.php?page=forminputkaryawan" title="input data">&nbsp;Input</a></button>
				<button type="button" class="btn btn-lg"><a href="index2.php?page=lihat" title="lihat data">&nbsp;Lihat</a></button>
				<button type="button" class="btn btn-lg"><a href="index2.php?page=formedit" title="edit data">&nbsp;Edit</a></button>
				<button type="button" class="btn btn-lg"><a href="index2.php?page=formcari" title="cari data">&nbsp;Cari</a></button>
				<button type="button" class="btn btn-lg"><a href="index2.php?page=about" title="tentang programmer">&nbsp;About</a></button>
				</div>-->
			</div>
		<!--<td valign="top"><ul class="navbar">
			<li><b>MAIN MENU</b></li><br>
			<li><a href="index.php" title="Balik">&nbsp;Home</a></li>
			<li><a href="index.php?page=forminputkaryawan" title="input data">&nbsp;Input</a></li>
			<li><a href="index.php?page=lihat" title="lihat data">&nbsp;Lihat</a></li>
			<li><a href="index.php?page=formedit" title="edit data">&nbsp;Edit</a></li>
			<li><a href="index.php?page=formcari" title="cari data">&nbsp;Cari</a></li>
			<li><a href="index.php?page=about" title="tentang programmer">&nbsp;About</a></li>
		</ul></td>-->
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
	<td rowspan="4" valign="top"><table width="1136" height="400" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="936" valign="top">
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'about': include "about.php"; break;
				case 'delete': include "delete.php"; break;
				case 'detail'	: include "detail.php"; break;
				case 'formedit'	: include "formedit.php"; break;
				case 'edit' : include "edit.php"; break;
				case 'formcari' : include "formcari.php"; break;
				case 'forminputkaryawan' : include "forminputkaryawan.php"; break;
				case 'lihat' : include "lihat.php"; break;
				case 'main' :
				default : include 'home.php';	
			}
			?></td>	
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>	
</tr>
<tr bgcolor="#5bc0de">
	<td height="36" colspan="5" bgcolor="#5bc0de"><div align="right" style="margin:0 10px 0 0;"><br></div></td>
</tr>
</table>
<div align="center"></div>
</body>
</html>

<?php

	mysqli_close($koneksi);
	ob_end_flush();

?>