<?php
print "Sayilari giriniz (sifirla bitiriniz)\n"; 
$dizi = diziOku();
$sonuc = diziTersi($dizi);
print "Dizinin tersi\n";
diziYaz($sonuc);

function diziTersi($dizim){
// $dizim dizisindeki elemanlar� ters siraya koyup bir dizi halinde d�nd�r�r

	$temp = array();	// bo� dizi tan�mla
	// $dizim'in son eleman�ndan ilk eleman�na do�ru d�ng� yap
	for($i = count($dizim)-1; $i >= 0; $i--){
		$temp[] = $dizim[$i];	// $dizim[$i] eleman�n� $temp dizisinin sonuna ekle
	}
	return $temp;	// $temp dizisini d�nd�r
}
function diziYaz($Dizi){
	
	// $Dizi'nin elemanlar�n� teker teker yazd�r
	for($i = 0; $i < count($Dizi); $i++){
		print $Dizi[$i] . "\n";
	}
	return;	// Asl�nda bu komuta gerek yok, ��nk� bu fonksiyon geriye bir �ey d�nd�rm�yor.
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
