<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teklonojileri ve Programlama-I</title>
</head>

<body>
    <!-- shift alt a bunu açar -->
    <?php
    /* shift alt a php de böyle açılır gözükür bunlar açıklama satırı bloğu */

    /*
    kullanılan komutlar  
    echo: ekrana yazdırma işlemi yapar.İçerisinde html etiketleri kullanılabilir.
    Çift veya tek tırnak ile kullaanılabilir.
    Çift tırnak içerisinde değişken içerikleri gösterilir.
    Nokta işareti ile birleştirme yapılabilir.
    Ters slaş \ (bu işaret altgr ve soru işaretine tıklayarak yapabilirsin) Kaçış karakterleridir.Özel ifadelerden önce kullanılır.
     */
    echo "<h1>AYDIN ADNAN MENDERES ÜNİVERSİTESİ<h1>";
    echo "<h4>Aydın Meslek YÜksekokulu</h4>";


    echo "<hr> <h4> Değişken Tanımlama Kuralları</h4>";
    echo "<ol>
                <li> Değişken İsimleri $ ile başlar </li>
                <li> Değişken İsimleri sayılsal bir ifade ile başlayamaz.</li>
                <li> Değişken İsimlerinde boşluk kullanılmaz.İki kelime varsa alt çizgi kullanılır örneğin  = birinci_sinif or birinci-sinif or birincisinif</li>
                <li> Değişken ve Dosya İsimlerinde Türkçe karakter kullanılmamalıdır.Kullanılabilir ama bunu bir sunucu yaptığımızda bir problem yaşayabiliriz.</li>
                <li> Değişken İsimlerinde büyük küçük harf kullanımına duyarlıdır. sayi != Sayi</li>
                <li> Değişken içeisinde eğer metinsel bi ifade varsa /* tek tırnak veya çift tırnak kullanılır.*/</li>
                <li> Değişken içerisinde eğer sayılsal bir ifade varsa tırnak kullanılmadan yazılır. </li>
                <li> Değişken ismi, değişkenin içeriğini ifade etmelidir</li>
      
      </ol>";

    echo "<hr> <h4> Değişken Tanımlama Örnekleri</h4>";
    $isim = "Enes";
    $soyisim = "Saz";
    $yas = 34;

    echo " $isim $soyisim";

    /* Uygulama:
               Üniversite-Myo-Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
               Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz.
               
               
               */
    $uni = " ADÜ";
    $myo = "Bilgisayar Programcılığı";
    $ad = " Enes";
    $soyad = "Saz";
    $no = 1204;


    ?>
    <form action="">
        <label for="uni">Universite </label>
        <input type="text name=" value="<?php echo $uni; ?> " id="uni"> <br>

        <label for="myo">Myo </label>
        <input type="text name=" value="<?php echo $myo; ?> " id="myo"> <br>

        <label for="ad">Ad</label>
        <input type="text name=" value="<?php echo $ad; ?> " id="ad"> <br>

        <label for="soyad">Soyad </label>
        <input type="text name=" value="<?php echo $soyad; ?> " id="soyad"> <br>

        <label for="no">No </label>
        <input type="text name=" value="<?php echo $no; ?> " id="no"> <br>

    </form>

</body>

</html>