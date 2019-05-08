  <?php

print "dizinin Sayilarini giriniz (sifirla bitiriniz)\n"; 
$dizi1 = diziOku();
$sirali= diziSirala($dizi1);
print "kucukten buyuge \n"; 
diziYaz($sirali);






function diziSirala($kume1){
  $temp=array();   
    for($i = 0; $i < count($kume1); $i++) {
       
        for($y = $i+1; $y < count($kume1); $y++){
            if($kume1[$i]>$kume1[$y]){
                $min=$kume1[$i];
                $kume1[$i]=$kume1[$y];
                $kume1[$y]=$min;
            }
        }
        
        
        
    }
    
 return $kume1;   
    
}


 
  
  
  
  
  
  
  function diziYaz($Dizi){
	
	// $Dizi'nin elemanlarýný teker teker yazdýr
	for($i = 0; $i < count($Dizi); $i++){
		print $Dizi[$i] . "\n";
	}
	return;	// Aslýnda bu komuta gerek yok, çünkü bu fonksiyon geriye birþey döndürmüyor.
}
function diziOku(){
	
	$i = 0;
	$temp = array();		// bos array tanýmla
	// klavyeden sayýlarý oku ve $temp dizisine sakla
	do{
		$deger = (int)fgets(STDIN);	// bir sayi oku
		if($deger == 0)		// eger girilen sayi sýfýrsa
			break;			// donguden cik
		$temp[$i] = $deger;	// $deger'i $temp dizisine ekle
		//$temp[] = $deger; $i deðiþkeni kullanýlmadan bu þekilde de yazýlabilir
		$i++;
	}while($deger);			// eger $deger sýfýrdan(false) farklýysa
	return $temp;			// $temp dizisini döndür
}
?>