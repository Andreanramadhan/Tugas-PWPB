<?php
include 'Koneksi.php';
$nama = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$nis = $_POST['Nis'];
$jurusan = $_POST['jurusan'];
$data = mysqli_query($Koneksi,"INSERT INTO `siswa`(`NIS`,`kelas`,`Jurusan`,`Nama`) VALUES ('$nis','$kelas','$jurusan',
'$nama')");
header("location: tampil_data.php");    