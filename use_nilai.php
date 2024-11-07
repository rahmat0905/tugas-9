<?php 
    require_once 'class_nilai.php';

    $ns1 = new nilaisantri();
    $ns1->nama ='Fulan';
    $ns1->nilai = 70;
    echo $ns1->nama .' Kuliah Di '.$ns1->sekolah;
    echo '<br>Hasil Ujian : '.$ns1->nilai. ' Dinyatakan ' .$ns1->gethasil();
?>