<?php
    require_once 'class_hp.php';

    $vivo = new Handphone();
    $oppo = new Handphone();
    $xiaomi = new Handphone();
    $realmi = new Handphone();

    $vivo->set_name('Vivo');
    $vivo->set_color('Blue');
    $oppo->set_name('Oppo');
    $oppo->set_color('Black');
    $xiaomi->set_name('Xiaomi');
    $xiaomi->set_color('Red');
    $realmi->set_name('Realmi');
    $realmi->set_color('Black');
    

    echo 'Nama Handphone '.$vivo->get_name().' Warnanya '.$vivo->get_color();
    echo '<br>Nama Handphone '.$oppo->get_name().' Warnanya '.$oppo->get_color();
    echo '<br>Nama Handphone '.$xiaomi->get_name().' Warnanya '.$xiaomi->get_color();
    echo '<br>Nama Handphone '.$realmi->get_name().' Warnanya '.$realmi->get_color();
?>