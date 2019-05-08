<?php
print "dizinin Sayilarini giriniz (sifirla bitiriniz)\n"; 
$dizi1 = diziOku();
sort($dizi1);    
print_r($dizi1);
$medyan=diziMedyani($dizi1);
print " medyani ";
print $medyan;

function diziMedyani($kume1){
    if(count($kume1)%2==1){
        $n=count($kume1);
        $medyan=$kume1[$n/2];
    }
    else{
        $n=count($kume1);
        $medyan=$kume1[$n/2]+$kume1[($n/2)-1];
        $medyan=$medyan/2;
        
    }
    
    return $medyan;
    
}


function diziYaz($Dizi){
	
	// $Dizi'nin elemanlarını teker teker yazdır
	for($i = 0; $i < count($Dizi); $i++){
		print $Dizi[$i] . "\n";
	}
	return;	// Aslında bu komuta gerek yok, çünkü bu fonksiyon geriye birşey döndürmüyor.
}
function diziOku(){
	
	$i = 0;
	$temp = array();		// bos array tanımla
	// klavyeden sayıları oku ve $temp dizisine sakla
	do{
		$deger = (int)fgets(STDIN);	// bir sayi oku
		if($deger == 0)		// eger girilen sayi sıfırsa
			break;			// donguden cik
		$temp[$i] = $deger;	// $deger'i $temp dizisine ekle
		//$temp[] = $deger; $i değişkeni kullanılmadan bu şekilde de yazılabilir
		$i++;
	}while($deger);			// eger $deger sıfırdan(false) farklıysa
	return $temp;			// $temp dizisini döndür
}

?>
   