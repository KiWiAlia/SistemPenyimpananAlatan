<?php
include 'linkdb.php';

$query="select Bil, Nama, Program, Bilik, Jantina from maklumat_pelajar";
$result=mysqli_query($con,$query);
?>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

input[type=submit]{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<h2>Senarai Nama Pelajar Asrama</h2>
<table>
  <tr>
    <th>Bil</th>
    <th>Nama</th>
    <th>Program</th>
    <th>Bilik</th>
    <th>Jantina</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>


<?php
while($maklumat_pelajar=mysqli_fetch_array($result)){
	$Bil=$maklumat_pelajar["Bil"];

echo "<tr>";
echo "<td>".$maklumat_pelajar["Bil"]."</td>";
echo "<td>".$maklumat_pelajar["Nama"]."</td>";
echo "<td>".$maklumat_pelajar["Program"]."</td>";
echo "<td>".$maklumat_pelajar["Bilik"]."</td>";
echo "<td>".$maklumat_pelajar["Jantina"]."</td>";
echo "<td>","<a href=\"formupdate.php?Bil=$Bil\">Update<a/>";
echo "<td>","<a href=\"prosdelete.php?Bil=$Bil\">Delete<a/>";

echo "</tr>";
}
echo "</table>";
?>

<br>

<center>
	<a href="forminsert.php"><input type="submit" name="submit"
    value="Daftar Pelajar"></a>
</center>
</body>
