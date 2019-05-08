<?php
print "Sayilari giriniz (sifirla bitiriniz)\n"; 
$dizi = diziOku();
$sonuc = diziTersi($dizi);
print "Dizinin tersi\n";
diziYaz($sonuc);

function diziTersi($dizim){
// $dizim dizisindeki elemanlarý ters siraya koyup bir dizi halinde döndürür

	$temp = array();	// boþ dizi tanýmla
	// $dizim'in son elemanýndan ilk elemanýna doðru döngü yap
	for($i = count($dizim)-1; $i >= 0; $i--){
		$temp[] = $dizim[$i];	// $dizim[$i] elemanýný $temp dizisinin sonuna ekle
	}
	return $temp;	// $temp dizisini döndür
}
function diziYaz($Dizi){
	
	// $Dizi'nin elemanlarýný teker teker yazdýr
	for($i = 0; $i < count($Dizi); $i++){
		print $Dizi[$i] . "\n";
	}
	return;	// Aslýnda bu komuta gerek yok, çünkü bu fonksiyon geriye bir þey döndürmüyor.
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
