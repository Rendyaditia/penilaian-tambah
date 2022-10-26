<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $NIK=$_POST['NIK'];
    $Jenis_Kendaraan=$_POST['jk'];

    $sql="INSERT INTO tb_bbm (NIK,Jenis_Kendaraan)VALUES ('$NIK','$Jenis_Kendaraan')";
    $query = mysqli_query ($db,$sql);
}

?>



