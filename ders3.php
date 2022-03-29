<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders3</title>
</head>
<body>
    <?php
    /* Uygulama Ödevi
    kuyruk ve yığın veri yapılarının php üzerinde dizileri kullanılarak örneleklendirilmesini gerçekleştiriniz */

    /* Uygulama: Rastgele üretilen sayı 
    50 'den büyükse 
    Geçtniz:Notunuzu:xx
    50'den küçükse
    Kaldınız : Notunuzu: xx 
    */
    $rastgele_Sayi = rand (10,100);
    if($rastgele_Sayi>=50){
        echo "Geçtiniz - Notunuz: $rastgele_Sayi ";
        
    }else{
        echo "Kaldınız - Notunuz: $rastgele_Sayi";
        
    }
      
          

    ?>
</body>
</html>
