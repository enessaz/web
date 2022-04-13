<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders4</title>
</head>
<body>
    <h3>Php'de Diziler Devam</h3>


   <?php
    
     $isimler = array();

     $isimler[] ="Ahmet";
     $isimler[] ="Mehmet";
     $isimler[] ="Ayşe";
     $isimler[] ="Nur";

     echo"<pre>";
     print_r($isimler);
     echo"</pre>";
             
     $isimler2 = array();
     $isimler2["isim1"] = "Kerim";
     $isimler2["isim2"] = "Hatice";
     $isimler2["isim3"] = "Burcu";
     $isimler2[] = "Hüseyin";
     $isimler2[] = "Gülcan";

     echo "<pre>";
     print_r($isimler2);
     
     echo"</pre>";

     
     $ogrenciDetay = array(
         "id" => 1,
         "adi" => "Nurullah",
         "soyadi" => "Karaca",
         "bolum" => "Bilgisayar",
         "yas" => "25",
         "dersler" => array(
             "ders1" => "Veri Tabanı",
             "ders2" => "Web Programlama",
             "ders3" => "Mobil Uygulama"
         ),
           "sinif" =>"2"
      );
         echo "<pre>";
         print_r($ogrenciDetay);
         echo "</pre>";
       
       
          echo "Öğrencinin Dersleri: <br>";

          
        
            





     






    ?>
         <h3>Koşul İfadeleri (if-Else)</h3>  
         <p>if-Else Bloklarında öncelikle koşul belirtililir ve sonraki dallanma koşula göre devam eder.</p>
             <h5>Karşılaştırma Operatörleri</h5>
        <ol>
            <li>==($a == $b Eşit ise. (Genellikle matematiksel bir karşılaştırma yapılır.)</li>
            <li>===$a === $b Denk ise. (Genellikle string bir karşılaştırma yapılır.)</li>
            <li>!=($a != $b Eşit değil ise. (Genellikle matematiksel bir karşılaştırma yapılır.)</li>
            <li>!==($a!==$b Denk değil ise. (Genellikle string bir karşılaştırma yapılır.)</li>
            <li>> ($a > $b) Büyük veya eşit ise.</li>
            <li><= ($a <= $b) Küçük  veya eşit ise.</li>
            <li> < ($a < $b) Küçük ise.</li>
        </ol>

        <h5>Mantıksal Operatörler</h5>
         <ol>
            <li> ! (olumsuzsa) (!a) --> $a'nın değeri FALSE ise true döner.Aksini yaoar olumsuz mu diye sorar. </li>
            <li> &&- AND (ve) ($a && $b )--> $a ve $b'nin değeri olumlu ise True döner. İki koşulda sağlanmak zorundadır.Koşullardan birtanesi false dönerse genel değer false olur.</li>
             <li> ||-OR (veya) ($a || $b)--> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç true olarak döner.Herhangi birisinin koşulu sağlaması genel dönüsü True yapar.  </li>
        </ol>
             
              <h4>Not:</h4>
            <ol>
                 <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
                <li> Else son kapanış koşuludur.(Herhangi bir şart belirtilmez.Hiçbir önkoşul gerçekleşmediğinde çalışacak son koşulu ifade eder.)</li>

            </ol>

           <?php
           
              $sayi =123;
              echo "$sayi";
              $sayi2 =345;
              $metin = "ADU";
              
              if ( $sayi1){
                  echo "<br>İf bloğu çalıştı : $sayi1";
              }else
              {
                echo "<br>else bloğu çalıştı : $sayi1";
              }
               
              if(!$sayi1) {
                        echo "<br>If bloğu çalıştı : $sayi1";
                      }  else {
                          echo"<br> Sayılar Eşit Değil: $sayi1 != $sayi2";

                      }


                      echo "<br>";
                      $telefonno = "05070503593";
                      $telefonnoYeni = str_split($telefonno, 3);
                      print_r($telefonnoYeni);
                      echo "<br>";
                  
                      foreach ($telefonnoYeni as $parca) {
                          echo "$parca ";







              ?>

</body>

</html>