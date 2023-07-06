<?php
include("koneksi.php");

 $id = $_GET['id'];

 $sql = "DELETE from mahasiswa WHERE id = '$id'";
 $query = mysqli_query($koneksi, $sql);

 header("location:index.php");

?>