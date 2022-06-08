<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta http-equiv="refresh" content="enes.php">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$connect= new mysqli($servername,$username,$password,$dbname);
if ($connect->connect_error) {
    die("baglantı hatası olustu");
  }
  echo"baglantı kuruldu";
  echo"<br>";
  
  $ekle="insert into enes(id,ad,soyad,email,aciklama)values('".$_POST["ad"]."','".$_POST["soyad"]."','".$_POST["email"]."','".$_POST["aciklama"]."')";
  if ($connect->query($ekle)) {
    echo "kayıt yapıldı";
    
  
  }
  else {
    echo " kayıt yapılamadı";
  }



?>
<table style="border: 1; " class="table table-stripeed">
  
    <tr> 
      <th>Id </th>
      <th> Ad </th>
      <th> Soyad</th>
      <th >Email</th>
      <th>Aciklama</th>
      </tr>
  


  
  <?php
  $bul="SELECT*FROM enes";
  $kayit=$connect->query($bul);
  if ($kayit ->num_rows>0) {
    while($satir=$kayit->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $satir["id"]."</td>";
    echo "<td>"   . $satir['ad']."</td>";
    echo "<td>"   . $satir['soyad']."</td>";
    echo "<td>"   . $satir['email']."</td>";
    echo "<td>"   . $satir['aciklama']."</td>";
    echo "</tr>";
        }
    }
  
  
  
  
  ?>
  
