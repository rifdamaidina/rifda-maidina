<table border="1">
<tr>
<th>NO</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tgl. Lahir</th>
<th>alamat</th>
<th>Gender</th>
<th>Hobi</th>
<th>No. Tlp</th>
<th>Email</th>
<th>Pekerjaan</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli query ($koneksi, "select 'from biodata");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d{'nama'}; ?></td>
<td><?php echo $d{'tempat_lahir'); </td>
<?php echo $d{'tgl_lahir'}; ?></td>
<td><?php echo $d{'alamat'}; ?></td>
<td><?php echo $d{'gender'}; ?></td>
<td><?php echo $d{'hobi'}; ?></td>
<td><?php echo $d{'no_tlp'}; ?></td>
<td><?php echo $d{'email'}; ?></td>
<td><?php echo $d{'pekerjaan'}; ?></td>
<td>
<a href=ëdit.php?id=<?php echo $'d{'íd'}; ">ËDIT</a>
<a href=hapus.php?id=<?php echo $'d{'íd'}; ">HAPUS</a>
</td>
</tr>
<?php
}
?>