<br>
<div class="wrapper">
  <div class="container">
  <?php
include "koneksi.php";
$id=$_GET[id];
$query = "select * from tbl_profil where id_profil='$id' ";
$sql = mysql_query($query);
$r=mysql_fetch_array($sql);
?>
<br>
<div class="col-lg-4">
	<img src="admin/admin/profil/foto/<?php echo $r['gambar_profil']; ?>" style="width:250px; height:250px;">
</div>
<div class="col-lg-8">
	<h1><?php echo"$r[judul_profil]"; ?></h1>
	<?php echo"$r[isi_profil]"; ?>
</div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
