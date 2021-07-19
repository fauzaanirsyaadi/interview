<?php
$array1 = array("sejarah" => "8", "matematika" => "7", "sosiologi"=>"6", "kewarganegaran"=>"9");
$array2 = array("sejarah" => "5", "matematika" => "8", "sosiologi"=>"9", "kewarganegaran"=>"6");

$rudi = 0;
$ani = 0;
// $jml=count($array1);
// echo $jml;
for ($x = 0; $x < 3; $x++) {
  if ($array1[$x]>$array2[$x]){
    $rudi = $rudi +1;
  }elseif ($array1[$x]<$array2[$x]){
    $ani = $ani + 1;
  }else{
    echo "salah masukan";
  }
}
echo "rudi " + $rudi;
echo "ani " + $ani; 
?>