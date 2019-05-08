<?php
        $i=0;
        $y=0;
	$a=0;
        
while($y==0){		
	 
          print "kitap giriniz \n";     
          $kitap[$i] = trim(fgets(STDIN));
          if($kitap[$i]==''){
              $y=1;
              if($a<2){
                  unset($kitap);
                  $kitap=array();
                   $i=0;
                   $a=0;
                   $y=0;
              }
              goto flag;
          }
          print "yazar giriniz \n";     
         $yazar[$i] = trim(fgets(STDIN));	
          print "fiyat giriniz \n";     
         $fiyat[$i] = (int)fgets(STDIN);
          $i=$i+1;
          $a=$a+1;
          flag:
         
        }
        
$enyakininfiyati=ortalamayaEnYakin($fiyat);                //fonksiyonu cagirdik
print " ortalamaya en yakin kitaplar ve fiyatlari \n";
for($i=0;$i<count($fiyat);$i++){
if($enyakininfiyati==$fiyat[$i]){
    print $kitap[$i];
    print "  ";
    print $fiyat[$i];
    print "\n";
            
}

    
}


function ortalamayaEnYakin($kume){
    print "islem basliyor \n";
    $minf= $kume[0];                     //minimum fiyatli kitap
    $maksf=$kume[0]; 
    $uzaklik=0; 
    $i=0;
    while($i<count($kume)){
        
        if($maksf <$kume[$i]){   //maksimum fiyati buluyor
        $maksf=$kume[$i];
        
    }
       if($minf >$kume[$i]){     //minimum fiyat buluyor
        $minf=$kume[$i];
        
    }
    $i=$i+1;
    }
    
  
    $i=0;
    $toplam=0;
    while($i<count($kume)){
       
    if($kume[$i]!=$maksf  ||  $kume[$i]!=$minf ){
    $toplam=$toplam+$kume[$i];
    
    $i=$i+1;   
     
   
    }
    }
    $ortalama=$toplam/$i;  
    
    $i=0;
    $a=0;
    $yakinfarki=1000; //ortalamaya yakin fiyat olan kitapla ortalama fiyat farki
    $enyakin=0;  
    
    while($i<count($kume)){
        if($ortalama==$kume[$i]){
            $enyakin=$ortalama;
             
               
               break;
        }
        elseif($ortalama>$kume[$i]){
            
            if($yakinfarki< $ortalama-$kume[$i]){     
               $yakinfarki= $ortalama-$kume[$i];
                $enyakin=$kume[$i];
               $i=$i+1;
            }
            else{
                $i=$i+1;
            }
        }
        elseif($ortalama<$kume[$i]){
            
            if($eyakinfarki< $kume[$i]-$ortalama){
               $yakinfarki= $kume[$i]-$ortalama;
                $enyakin=$kume[$i];
                $i=$i+1;
               
            }
            else{
                $i=$i+1;
            }
        }
        
        
        
        
        }
        
        
        return $enyakin;
}




?>
    