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
	
	// $Dizi'nin elemanlar�n� teker teker yazd�r
	for($i = 0; $i < count($Dizi); $i++){
		print $Dizi[$i] . "\n";
	}
	return;	// Asl�nda bu komuta gerek yok, ��nk� bu fonksiyon geriye bir�ey d�nd�rm�yor.
}
function diziOku(){
	
	$i = 0;
	$temp = array();		// bos array tan�mla
	// klavyeden say�lar� oku ve $temp dizisine sakla
	do{
		$deger = (int)fgets(STDIN);	// bir sayi oku
		if($deger == 0)		// eger girilen sayi s�f�rsa
			break;			// donguden cik
		$temp[$i] = $deger;	// $deger'i $temp dizisine ekle
		//$temp[] = $deger; $i de�i�keni kullan�lmadan bu �ekilde de yaz�labilir
		$i++;
	}while($deger);			// eger $deger s�f�rdan(false) farkl�ysa
	return $temp;			// $temp dizisini d�nd�r
}
?>