<?php
$URL = "YOUR DOMAIN /";
header("Access-Control-Allow-Origin: *");
$dir="uploads/";
$ilo=0;
if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $ilo++;
        }
    }

$i=0;
$l=0;
$ilos=($ilo/2);
$class=0;
$co=round($ilos/3);
$licznik=0;
print('{"result":"0000","message":"ok","recordCount":"'.$ilos.'","dataList":[ ');

foreach (glob("uploads/*.*") as $filename) {
    
    //echo $filename."<br />";
    
    if( ($i % 2)==0 or $i==0){
        $pliczek = $filename;
       // echo "wpisuje do pliczek";
        $l++;
        $licznik++;
    }else{
        $nazwa = $filename;

        if($i != $ilo-1){

            if($licznik==$co){
                $class++;
                $licznik=0;
            }
            print(' {"watchNo":"'.str_pad($l, 4, '0', STR_PAD_LEFT).'","watchClass":"'.str_pad($class, 2, '0', STR_PAD_LEFT).'","watchfaceImageURL":"'.$URL.$pliczek.'","watchfaceBinURL":"'.$URL.$nazwa.'","watchfaceUploadFileURL":"'.$URL.$pliczek.'","name":"'.substr($pliczek, 8, -4).'"}, ');
        }else{
            print('{"watchNo":"'.str_pad($l, 4, '0', STR_PAD_LEFT).'","watchClass":"'.str_pad($class, 2, '0', STR_PAD_LEFT).'","watchfaceImageURL":"'.$URL.$pliczek.'","watchfaceBinURL":"'.$URL.$nazwa.'","watchfaceUploadFileURL":"'.$URL.$pliczek.'","name":"'.substr($pliczek, 8, -4).'"}]}');}

        }$i++;
    }    

//print ('{"a":"a"}]}')
?>