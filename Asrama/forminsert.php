<!DOCTYPE html>
<html>
<head>
<title>PHP-Maklumat Pelajar</title>
</head>
<style>
input[type=text], select {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>Maklumat Pelajar</h3>

<div>
  <form action="prosdata.php" method="post">
    No. Bilangan<br>
    <input type="text" id="bil" name="Bil">
</br>
    Nama Pelajar<br>
    <input type="text" id="nama" name="Nama">
</br>
    Nama Program<br>
    <select id="program" name="Program">
      <option value="1 SVM BAK">Perakaunan</option>
      <option value="1 SVM HFD">Fesyen</option>
      <option value="1 SVM HSK">Seni Kulinari</option>
      <option value="1 SVM KPD">Sistem Pangkalan Data & Aplikasi Web</option>
      <option value="1 SVM KSK">Sistem Komputer & Rangkaian</option>
      <option value="1 SVM MTA">Teknologi Automotif</option>
      <option value="1 SVM MPP">Teknologi Penyejukbekuan & Penyamanan Udara</option>
    </select>
</br>
    No. Bilik<br>
    <input type="text" id="bilik" name="Bilik">
</br>
    Jantina<br>
    <select id="jantina" name="Jantina">
      <option value="PEREMPUAN">Perempuan</option>
      <option value="LELAKI">Lelaki</option>
    </select>
<br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
