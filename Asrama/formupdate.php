<?php
include 'linkdb.php';
$Bil=$_GET ['Bil'];

$pengurusan_asrama=mysqli_query($con, "select * from maklumat_pelajar where Bil='$Bil'");
$row=mysqli_fetch_array($pengurusan_asrama);
?>

<h2>Borang Maklumat Pelajar</h2>

<form action="prosupdate.php" method="post">
  <fieldset>
    <legend>Sila isi borang di bawah:</legend>
    Bil:<br>
    <input type="text" name="Bil" value="<?php echo $row['Bil'];?>">
    <br>
    Nama:<br>
    <input type="text" name="Nama" value="<?php
    echo $row ['Nama']; ?>">
    <br>
    Program:<br>
    <select id="program" name="Program" value="<?php echo $row ['Program']; ?>">
      <option value="1 SVM BAK">Perakaunan</option>
      <option value="1 SVM HFD">Fesyen</option>
      <option value="1 SVM HSK">Seni Kulinari</option>
      <option value="1 SVM KPD">Sistem Pangkalan Data & Aplikasi Web</option>
      <option value="1 SVM KSK">Sistem Komputer & Rangkaian</option>
      <option value="1 SVM MTA">Teknologi Automotif</option>
      <option value="1 SVM MPP">Teknologi Penyejukbekuan & Penyamanan Udara</option>
    </select>
    <br>
    Bilik:<br>
    <input type="text" name="Bilik" value="<?php
   echo $row['Bilik'];
    ?>">

    <br>
    Jantina:<br>
    <select id="jantina" name="Jantina" value="<?php echo $row['Jantina']; ?>">
      <option value="PEREMPUAN">P</option>
      <option value="LELAKI">L</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>
