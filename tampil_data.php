<?php
include 'Koneksi.php';
$data = mysqli_query($Koneksi,"SELECT * FROM `siswa`");
?>
<a href="tambah_data.php">tambah data</a><br>
<?php
foreach($data as $data){
  echo $data['NIS']."<br>";
  echo $data['Jurusan']."<br>";
  echo $data['Kelas']."<br>";
  echo $data['Nama']."<br>";
  ?>
  <a href="hapus.php?id=<?php echo $data['NIS']?>">hapus</a>&nbsp
  
  <a href="edit.php?id=<?php echo $data['NIS']?>">edit</a>
  <br>
    <?php
}
    
