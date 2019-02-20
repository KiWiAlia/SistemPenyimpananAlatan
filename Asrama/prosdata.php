<?php

include 'linkdb.php';

$Bil=$_POST['Bil'];
$Nama=$_POST['Nama'];
$Program=$_POST['Program'];
$Bilik=$_POST['Bilik'];
$Jantina=$_POST['Jantina'];

$query="insert into maklumat_pelajar (Bil,Nama,Program,Bilik,Jantina)
		values ('$Bil','$Nama','$Program','$Bilik','$Jantina')";

if (mysqli_query($con,$query)){
	echo " - Data berjaya direkod";
	header('location:index.php');
}
else{
	echo " - Data tidak berjaya direkod";
}
?>
