<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders4</title>
</head>
<body>
<h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>
    <?php
    
    
   

  

    $dizi1 = array(1, 2, 3, 4, "Enes", "Arıca", 130.5);
    $dizi2 = [1,"tarık","baş",227.5];
    echo "<pre>";
     print_r($dizi1);
    echo"</pre>";

   echo "<pre>";
   print_r($dizi2);
   echo"</pre>";

    echo "Dizinin 5. Elemanı: $dizi1[5]";
    echo "<br>Dizinin 1. Elemanı:". gettype($dizi1[1]);

    echo "<br>Dizinin 0. Elemanı:". gettype($dizi1[0]);
    echo "<br>Dizinin 1. Elemanı:". gettype($dizi1[1]);
    echo "<br>Dizinin 2. Elemanı:". gettype($dizi1[2]);
    echo "<br>Dizinin 3. Elemanı:". gettype($dizi1[3]);
    echo "<br>Dizinin 4. Elemanı:". gettype($dizi1[4]);
    echo "<br>Dizinin 5. Elemanı:". gettype($dizi1[5]);
    echo "<br>Dizinin 6. Elemanı:". gettype($dizi1[6]);


    echo"<h3> Dizinin içeriğinin Foreach Döngüsü İle Yazdırılması-1</h3>";
    foreach($dizi1 as $value) {
        echo $value . "<br>";
    }



    echo"<h3> Dizinin içeriğinin Foreach Döngüsü İle Yazdırılması-2</h3>";
    foreach($dizi1 as $key=> $value) {
        echo "$key - $value <br>";
    }


    echo"<h3> Dizinin içeriğinin For Döngüsü İle Yazdırılması</h3>";
     
    for ($i=0; $i < count($dizi1) ; $i++) { 
      
        echo $dizi1[$i] . "<br>";

         }

           $sayilar = array(1,2,3,4,5,6);

           $sayilar = array(
               array(1,3,5,7,9),
               array(2,4,6,8,10)
 );

              echo"<pre>";
              print_r($sayilar);
              
              echo"</pre>";
          
             
              echo "Sayılar Dizisinin İçerisindeki 2. Dizinin 3 İndisli Elemanı: " . $sayilar[1][3];

              echo "<br>Sayılar Dizisinin İçerisindeki 1. Dizinin 4 İndisli Elemanı: " . $sayilar[0][4];

              echo"<br>---------------";

              $sayilar = array(
                  "integer"=> array(55,23,15,24),
                  "Double"  => array(13,5,2.5,1.36)

              );
                  
             $bilgiler = array(
                "id" => "0",
                "adi" => "Enes",
                "soyadi" => "Saz",
                "gsm" => "555 666 55 44",
                "yas" => 32
            );

            echo "$bilgiler[adi] $bilgiler[soyadi] Hoşgeldiniz.<br>";
            echo  $bilgiler["adi"] . " " . $bilgiler["soyadi"] . " Hoşgeldiniz.";
        
            echo "<pre>";
            print_r($bilgiler);
            echo "</pre>";
        
            foreach ($bilgiler as $bilgi) {
                echo $bilgi . " - ";
            }
            echo "<br><br><br><br>";
            $bilgi = str_split($bilgiler["gsm"],3);
            foreach ($bilgi as $value) {
                echo $value . " ";
            }


             
   
    ?>

</body>

</html>