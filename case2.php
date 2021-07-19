<?php
$array = array("rudi"=> array("sejarah" => "8", "matematika" => "7", "sosiologi"=>"6", "kewarganegaran"=>"9"), "ani"=>array("sejarah" => "5", "matematika" => "8", "sosiologi"=>"9", "kewarganegaran"=>"6"));

$rudi;$ani;
for($i=0;$i<count($array);$i++){
  if ($array1[$i]>$array2[$i]){
    $rudi = $rudi +1;
  }elseif ($array1[$i]<$array2[$i]){
    $ani = $ani + 1;
  }else{
    continue;
  }
}
echo "rudi " + $rudi;
echo "ani " + $ani; 
?>