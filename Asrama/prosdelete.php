<?php
include 'linkdb.php';
$Bil=$_GET['Bil'];
$query="delete from maklumat_pelajar where Bil='$Bil'";

if ($result=mysqli_query($con,$query)) {
	echo " - Data Berjaya Di Delete";
	header('location:index.php');
}
else{
	echo " - Data Tidak Berjaya Di Delete";
}

?>
