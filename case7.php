<?php
    $jumlahUang = 72500;

    $a;$b;$c;$d;$e;$f;$g;$h;
    
    $Mod;
    
    
    
    //$b
    
    $Mod=$jumlahUang%50000;
    
    $b=($jumlahUang-$Mod)/50000;
    
    $jumlahUang=$jumlahUang-($b*50000);
    
    //$c
    
    $Mod=$jumlahUang%20000;
    
    $c=($jumlahUang-$Mod)/20000;
    
    $jumlahUang=$jumlahUang-($c*20000);
    
    //$d
    
    $Mod=$jumlahUang%10000;
    
    $d=($jumlahUang-$Mod)/10000;
    
    $jumlahUang=$jumlahUang-($d*10000);
    
    //$e
    
    $Mod=$jumlahUang%5000;
    
    $e=($jumlahUang-$Mod)/5000;
    
    $jumlahUang=$jumlahUang-($e*5000);
    
    //$f
    
    $Mod=$jumlahUang%1000;
    
    $f=($jumlahUang-$Mod)/1000;
    
    $jumlahUang=$jumlahUang-($f*1000);

    //$g
    
    $Mod=$jumlahUang%200;
    
    $g=($jumlahUang-$Mod)/200;
    
    $jumlahUang=$jumlahUang-($g*200);

    //$h
    
    $Mod=$jumlahUang%100;
    
    $h=($jumlahUang-$Mod)/100;
    
    $jumlahUang=$jumlahUang-($h*100);
    
    
    echo "50000 berjumlah : ".$b. ",20000 berjumlah :  " .$c. ",10000 berjumlah : " .$d. ",5000 berjumlah : " .$e. ",1000 berjumlah : " .$f. ",200 berjumlah : " .$g. ",100 berjumlah : " .$h;

    ?>