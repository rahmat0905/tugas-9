<?php 
    require_once 'class_mtk.php';

    matematika::$counter++;
    matematika::$counter++;
    matematika::naikancounter();
    echo 'counter sekarang: '. matematika::$counter;
    echo '<hr>';

    $x = matematika::tambahkan(6,5);
    echo "6 - 5 = $x";
    echo '<hr>';

    echo 'nilai PHI: '. matematika::PHI;
    $luas_lingkaran = matematika::luaslingkaran(8);
    echo '<br>luas lingkaran dengan jari-jari 8 adalah: '. $luas_lingkaran; 
    
    echo '<hr>';

    $x = matematika::tambahkan(35,15);
    echo "35 - 15 = $x";
    echo '<hr>';
?>