<?php 



$jsonstring_awall = file_get_contents('jsonawal.json');
$tes_decode_to_array = json_decode($jsonstring_awall,true);
$panjang_custom = count($tes_decode_to_array['custom']);
echo $panjang_custom;
$array_custom = $tes_decode_to_array['custom'];

//memulai pooling untuk array parent
$array_parent_id =[];


for ($x=0;$x<=$panjang_custom-1;$x++){
    if ($tes_decode_to_array['custom'][$x]['type']=='parent'){          
        array_push($array_parent_id,$tes_decode_to_array['custom'][$x]['id']);
    }

    
}



//array id parent sudah terisi
//lalu lakukan looping array parent
//tambahkan data childern sesuai yg berhubungan



echo '<pre>';
print_r($tes_decode_to_array);
echo '</pre>';


?>
