<?php
 print "ilk stringi girin \n"; 
 $dizi1 = diziOku();
 print "ikinci stringi girin \n"; 
 $dizi2= dizioku();
 $dizi1=kumekurali($dizi1);
 $dizi2=kumekurali($dizi2);
print "\n";
 diziyaz($dizi1);
print "\n";
 diziyaz($dizi2);
 print "\n";
 print count($dizi1);
 print "\n";
 
$birlesimi=birlesim($dizi1,$dizi2);
print "Birlesimleri\n";
diziyaz($birlesimi);
print "\n";
$kesisimi=kesisim($dizi1,$dizi2);
print "kesisimleri\n";
diziyaz($kesisimi);
print "\n";
$farki=fark($dizi1,$dizi2);
print "farklari\n";
diziyaz($farki);

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
          if($kume1[$y]!=""){ 
          $temp[$a]=$kume1[$y];
          }
           $a=$a+1;
           
       }
       return $temp;
} 
function kumekurali($kume1) {                 //her stringde tekrar eden karakter olamaz cunku kume olarak aliyoruz
    $temp=array();
    $a=0;
        for($i=0; $i<strlen($kume1)-2; $i++){
            for($y=$i+1; $y<strlen($kume1)-2; $y++){
                if($kume1[$y]==$kume1[$i]){
                break;
                }
                elseif($y==strlen($kume1)-3){
                   $temp[$a]=$kume1[$i];
                $a=$a+1;
                }
                
                }
        }
            $n=strlen($kume1)-3;
            $temp[$a] =$kume1[$n];
           
            
            

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
 
return $temp;

              }




function diziOku(){
	
	
			
	
		$deger =fgets(STDIN);	
				
	return $deger;			// $temp dizisini dÃ¶ndÃ¼r
}
        
function diziYaz($Dizi){
	
	// $Dizi'nin elemanlarını teker teker yazdır
	for($i = 0; $i < count($Dizi); $i++){
		print $Dizi[$i];
	}
	return;	// Aslında bu komuta gerek yok, çünkü bu fonksiyon geriye birşey döndürmüyor.
}


?>
