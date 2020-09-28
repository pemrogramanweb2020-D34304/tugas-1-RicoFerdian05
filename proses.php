<?php

    $bila1 = $_GET['bilangan1'];
    $bila2 = $_GET['bilangan2'];
    $oper = $_GET['operasi'];
    $hasil = 0;
    echo "Bilangan 1 = $bila1 <br>";
    echo "Bilangan 2 = $bila2 <br>";

    if($oper == "tambah" ){
        $hasil = $bila1 + $bila2;
        echo "Operasi hitung = tambah<br>$bila1 + $bila2 = $hasil";
    }
    elseif($oper == "kurang"){
        $hasil = $bila1 - $bila2;
        echo "Operasi hitung = kurang<br>$bila1 - $bila2 = $hasil";
    }
    elseif($oper == "kali"){
        $hasil = $bila1 * $bila2;
        echo "Operasi hitung = kali<br>$bila1 * $bila2 = $hasil";
    }
    elseif($oper == "bagi"){
        $hasil = $bila1 / $bila2;
        echo "Operasi hitung = bagi<br>>$bila1 / $bila2 = $hasil";
    }
    else{
        echo "ERROR";
    }
?>
