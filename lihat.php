<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto;">
<h2 align="center" class="page-header"><font color="orange" size="4" face="arial"><b>Data Karyawan</b></font></h2><br>
<!--<input type="button" class="btn btn-info" value="Export To PDF" title="Save as PDF Format" onclick=window.open('report_data.php','_blank');><br><br>-->
<a href="index.php?page=forminputkaryawan" class="btn btn-primary">Tambah Data</a><br />
<table border="0" align="center" cellpadding="0" cellspacing="0" class="table table-hover">
<tr>
	<th>No</th>&nbsp;
	<th>NIK</th>&nbsp;
	<th>Nama</th>&nbsp;
	<th>Foto</th>&nbsp;      
	<th>Jenis Kelamin</th>&nbsp;
	<th>Jabatan</th>&nbsp;
	<th>Departemen</th>&nbsp;
	<th>Tempat Lahir</th>&nbsp;
	<th>Tanggal Lahir</th>&nbsp;
	<th>Gol Darah</th>&nbsp;
	<th>Agama</th>&nbsp;
	<th>Status Kawin</th>&nbsp;
	<th>Telpon</th>&nbsp;
	<th>Email</th>&nbsp;
	<th>Action</th>&nbsp;     
</tr>
<?php
	/*$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("karyawan");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}*/
	include "koneksi.php";
	$cari="SELECT * FROM data_karyawan ORDER BY nik";
	$tampil = mysqli_query($koneksi, $cari);
	$nomer=0;
    while (	$hasil = mysqli_fetch_array ($tampil)) {
			$nik = stripslashes ($hasil['nik']);
			$nama = stripslashes ($hasil['nama']);
			$namafoto = stripslashes ($hasil['namafoto']);
			$foto = $hasil['namafoto'];
			$jk = stripslashes ($hasil['jk']);
			$jab = stripslashes ($hasil['jab']);
			$dept = stripslashes ($hasil['dept']);
			$tmp_lhr = stripslashes ($hasil['tmp_lhr']);
			$tgl_lhr = $hasil['tgl_lhr'];
			$gol_darah = stripslashes ($hasil['gol_darah']);
			$agama = stripslashes ($hasil['agama']);
			$status = stripslashes ($hasil['status']);
			$telp = stripslashes ($hasil['telp']);
			$email = stripslashes ($hasil['email']);
		{
	$nomer++;
?>
	<tr align="center" href="index.php?page=detail&nik=<?=$nik; ?>">
		<td><?=$nomer?>
		<div align="center"></div></td>
		<td><?=$nik?>
		<div align="center"></div></td>
		<td><?=$nama?>
		<div align="center"></div></td>
		<td><?php
			if (!empty($namafoto)){
		       echo "<img class='img-circle' src='images/$namafoto' width='70' height='70' title='$nama' >";
		    }
		    else{
		    	 echo "<strong><img src='images/nopic.gif' width='70' height='70'> <br> Tidak ada foto </strong>";
				
			}
				?>&nbsp;</td>
		<td><?=$jk?><div align="center"></div></td>
		<td><?=$jab?><div align="center"></div></td>
		<td><?=$dept?><div align="center"></div></td>
		<td><?=$tmp_lhr?><div align="center"></div></td>
		<td><?php
			if ($hasil['tgl_lhr'] === NULL)
				$hasil['tgl_lhr'] = "NULL"; 
				echo("$tgl_lhr\n");
		?><div align="center"></div></td>
		<td><?=$gol_darah?><div align="center"></div></td>
		<td><?=$agama?><div align="center"></div></td>
		<td><?=$status?><div align="center"></div></td>
		<td><?=$telp?><div align="center"></div></td>
		<td><?=$email?><div align="center"></div></td>
		<td><div align="center"><a href="index.php?page=detail&nik=<?=$nik; ?>">Detail</a> | <a href="index.php?page=delete&nik=<?=$nik; ?>" OnClick="return confirm('Anda Yakin Seluruh Data Karyawan  <?=$nik?> Atas Nama <?=$nama?>  akan dihapus?');">Delete</a> | <a href="index.php?page=edit&nik=<?=$nik; ?>">Edit</a></div></td>
	</tr>
<?php  
		}
	}
//Tutup koneksi engine MySQL
	mysqli_close($koneksi);
?>
</table>
</div>
