  <?php
  print "Ilk dizinin Sayilarini giriniz (sifirla bitiriniz)\n";     
  $dizi1 = diziOku();
  print "Ikinci dizinin Sayilari giriniz (sifirla bitiriniz)\n"; 
  $dizi2 = diziOku();
  $toplami=toplama($dizi1, $dizi2);
  $cikarilmis=cikarma($dizi1, $dizi2);
  $carpilmis=carpma($dizi1,$dizi2);
  print "iki dizi toplamlari \n";
  diziYaz($toplami);
  print "iki dizi farki \n";   
  diziYaz($cikarilmis);
  print "iki dizi carpimlari \n";
  diziYaz($carpilmis);
  
 function toplama($kume1, $kume2){                          //toplama yapıp yeni dizi olusturan fonksiyon
 $temp = array();
 if(count($kume1)==count($kume2))     {                        //eleman sayilari esitse
 for($i = 0; $i < count($kume1); $i++) {
      $temp[$i]=$kume1[$i]+$kume2[$i];
     }    
      } 
 elseif(count($kume1)>=count($kume2)){                           //ilk dizi fazlaysa
         for($i = 0; $i < count($kume1); $i++){
             
             if($i>=count($kume2)){                            //ilk eleman fazlaliklari oldugu gibi yaz
                 $temp[$i]=$kume1[$i];
             }
             else{
                $temp[$i]=$kume1[$i]+$kume2[$i]; 
                 
                 }
                  }
                   }
elseif(count($kume2)>=count($kume1)){                           //ikinci dizi fazlaysa
         for($i = 0; $i < count($kume2); $i++){
             
             if($i>=count($kume1)){                            //ilk eleman fazlaliklari oldugu gibi yaz
                 $temp[$i]=$kume2[$i];
             }
             else{
                $temp[$i]=$kume1[$i]+$kume2[$i]; 
                 
                 }
                  }
                   }
                   
 return $temp;
 }
  
  function cikarma($kume1, $kume2){
 $temp = array();
  if(count($kume1)==count($kume2))     {                   //eleman sayilari esitse
      for($i = 0; $i < count($kume1); $i++) {
        $temp[$i]=$kume1[$i]-$kume2[$i];
     }     
      }
  elseif(count($kume1)>=count($kume2)){                           //ilk dizi fazlaysa
         for($i = 0; $i < count($kume1); $i++){
             
             if($i>=count($kume2)){                            //ilk eleman fazlaliklari oldugu gibi yaz
                 $temp[$i]=$kume1[$i];
             }
             else{
                $temp[$i]=$kume1[$i]-$kume2[$i]; 
                 
                 }
                  }
                   }
 elseif(count($kume2)>=count($kume1)){                           //ikinci dizi eleman sayisi fazlaysa
         for($i = 0; $i < count($kume2); $i++){
             if($i>=count($kume1)){                            //ilk eleman fazlaliklari oldugu gibi yaz
                 $temp[$i]=$kume2[$i];
             }
             else{
                $temp[$i]=$kume1[$i]-$kume2[$i];                 
                 }
                  }
                   }
                   
 return $temp;
   }
  
  function carpma($kume1,$kume2){
      
      $temp = array();
  if(count($kume1)==count($kume2))     {                   //eleman sayilari esitse
      for($i = 0; $i < count($kume1); $i++) {
        $temp[$i]=$kume1[$i]*$kume2[$i];
     }     
      }
      elseif(count($kume1)>=count($kume2)){                           //ilk dizi fazlaysa
         for($i = 0; $i < count($kume1); $i++){
             
             if($i>=count($kume2)){                            //ilk eleman fazlaliklari oldugu gibi yaz
                 $temp[$i]=$kume1[$i];
             }
             else{
                $temp[$i]=$kume1[$i]*$kume2[$i]; 
                 
                 }
                  }
                   }
elseif(count($kume2)>=count($kume1)){                           //ikinci dizi fazlaysa
         for($i = 0; $i < count($kume2); $i++){
             
             if($i>=count($kume1)){                            //ilk eleman fazlaliklari oldugu gibi yaz
                 $temp[$i]=$kume2[$i];
             }
             else{
                $temp[$i]=$kume1[$i]*$kume2[$i]; 
                 
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
	return;	
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
		//$temp[] = $deger; 
		$i++;
	}while($deger);			
	return $temp;			
}
        ?>
