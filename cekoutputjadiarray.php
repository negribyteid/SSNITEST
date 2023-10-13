<?php 

$jsonstring_output= file_get_contents('outputdiharapkan.json');
$tes_decode_to_array = json_decode($jsonstring_output,true);

echo '<pre>';
print_r($tes_decode_to_array);
echo '</pre>';
?>