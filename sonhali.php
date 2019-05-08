<?php
  print "Ilk dizinin Sayilarini giriniz (sifirla bitiriniz)\n";     
  $dizi1 = diziOku();
  print "Ikinci dizinin Sayilari giriniz (sifirla bitiriniz)\n"; 
  $dizi2 = diziOku();
  print "birlesimleri \n";
  $birlesimi= birlesim($dizi1,$dizi2);
  diziYaz($birlesimi);
  print "kesisimleri \n";
  $kesisimi= kesisim($dizi1,$dizi2);
  diziYaz($kesisimi);
  print "farklari \n";
  $farklari= fark($dizi1,$dizi2);
  diziYaz($farklari);
  
  
  
  
  
  
  function birlesim($kume1,$kume2){
      $temp=array();
      $a=0;
      for($i=0; $i<count($kume2); $i++){
          
          for($y=0; $y<count($kume1); $y++){        //2.dizideki eleman 1. dizide varsa ekleme
              if($kume1[$y]==$kume2[$i]){
                  break;
              }
              elseif($y+1==count($kume1)){
                  
                  $temp[$a]=$kume2[$i];
                  $a=$a+1;
              }
          }
          
          
      }
       for($y=0; $y<count($kume1); $y++){
           $temp[$a]=$kume1[$y];
           $a=$a+1;
           
       }
      
      return $temp;
  }


function kesisim($kume1,$kume2){
    $temp=array();
    $a=0;
        for($i=0; $i<count($kume2); $i++){
            for($y=0; $y<count($kume1); $y++){
                if($kume1[$y]==$kume2[$i]){
                $temp[$a]=$kume2[$i];
                $a=$a+1;
            }
        }
            }

            return $temp;
                }



function fark($kume1,$kume2){
   $temp=array();
      $a=0;
 for($i=0; $i<count($kume1); $i++){
          
          for($y=0; $y<count($kume2); $y++){        //2.dizideki eleman 1. dizide varsa ekleme
              if($kume2[$y]==$kume1[$i]){
                  break;
              }
              elseif($y+1==count($kume2)){
                  
                  $temp[$a]=$kume1[$i];
                  $a=$a+1;
              }
          }
}
return $temp;

              }



function diziYaz($Dizi){
	
	// $Dizi'nin elemanlarÄ±nÄ± teker teker yazdÄ±r
	for($i = 0; $i < count($Dizi); $i++){
		print $Dizi[$i] . "\n";
	}
	return;	// AslÄ±nda bu komuta gerek yok, Ã§Ã¼nkÃ¼ bu fonksiyon geriye birÅŸey dÃ¶ndÃ¼rmÃ¼yor.
}
function diziOku(){
	
	$i = 0;
	$temp = array();		// bos array tanÄ±mla
	// klavyeden sayÄ±larÄ± oku ve $temp dizisine sakla
	do{
		$deger = (int)fgets(STDIN);	// bir sayi oku
		if($deger == 0)		// eger girilen sayi sÄ±fÄ±rsa
			break;			// donguden cik
		$temp[$i] = $deger;	// $deger'i $temp dizisine ekle
		//$temp[] = $deger; $i deÄŸiÅŸkeni kullanÄ±lmadan bu ÅŸekilde de yazÄ±labilir
		$i++;
	}while($deger);			// eger $deger sÄ±fÄ±rdan(false) farklÄ±ysa
	return $temp;			// $temp dizisini dÃ¶ndÃ¼r
}
 ?>

