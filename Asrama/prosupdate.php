<?php
include 'linkdb.php';
$Bil=$_POST['Bil'];
$Nama=$_POST['Nama'];
$Program=$_POST['Program'];
$Bilik=$_POST['Bilik'];
$Jantina=$_POST['Jantina'];

$query="update maklumat_pelajar set Bil='$Bil',	Nama='$Nama',Program='$Program',Bilik='$Bilik',Jantina='$Jantina' where Bil='$Bil'";

if ($result=mysqli_query($con,$query)) {
	echo " - Data Berjaya Di Update";
	header('location:index.php');
}
else{
	echo "- Data Tidak Berjaya Di Update";
}

?>
