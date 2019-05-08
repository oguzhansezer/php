
        <?php
   /*---------------------------------------------------------------------
Program:	mark3.php
Konusu:		BMG dersi Ödev3 2. sorusunun cevabý
Programcý:	Oguzhan Sezer 1306150047 oguzhansezer11@gmail.com
Dili:		PHP 7
Tarih:		28.11.2018
Kurum:		Ýstanbul Üniversitesi
----------------------------------------------------------------------*/
        
$i = 0;
$dosya = fopen("ogrenci.txt", "r");	// dosyayi okumak icin ac
while(! feof($dosya)){	// dosya'nin sonuna vardik mi
   $i++;
	$satir = fgets($dosya);	// dosya dosyasindan satir oku
	$veri = explode(' ', $satir); // array olarak dondurur
	$adi = $veri[1];              //okunan satirlari atama yap
	$soyadi = $veri[2];
	$ogrno = $veri[0];
	$bolumno = $veri[3];
        $bno = (int)$bolumno;         //bolum noyu int olarak al
        $dosya_adi =  $bno . '.txt';  //bolum nolara gore dosya olustur
        touch($dosya_adi);
    
       $dosya1 = fopen($dosya_adi, 'a+');          //yoksa yarat varsa ekle
       fwrite($dosya1,$ogrno);                     //sirayla bilgiler giriliyor
       fwrite($dosya1," ");
       fwrite($dosya1,$adi);
       fwrite($dosya1," ");
       fwrite($dosya1,$soyadi);
       fwrite($dosya1," ");
       fwrite($dosya1,$bolumno);
       
       fclose($dosya1);
        
        
        
        
        
}
        ?>
   