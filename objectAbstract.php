<?php
    require_once 'Lingkaran.php';
    require_once 'persegiPanjang.php';
    require_once 'Segitiga.php';
    
    $l = new Lingkaran (7);
    $p = new persegiPanjang (5, 3);
    $s = new Segitiga (4, 5, 6);

    $ar_data = [$l, $p, $s];

    foreach ($ar_data as $data){
        $data -> cetak();
    }
?>