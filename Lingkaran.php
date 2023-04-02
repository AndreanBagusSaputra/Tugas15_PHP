<?php
    require_once 'Abstract.php';
    
    class Lingkaran extends Bentuk2D{
        public $jari2;
        public function __construct($jari2){
            $this -> jari2 = $jari2;
        }

        public function namaBidang(){
            echo "Lingkaran";
        }

        public function luasBidang(){
            $luas = 3.14 * $this -> $jari2;
            return $luas;
        }

        public function kelilingBidang(){
            $keliling = 2 * 3.14 * $this -> $jari2;
        }
        
        public function cetak(){
            echo 'Nama Bidang: '. $this -> namaBidang;
            echo '<br> Luas Bidang: '. $this -> luasBidang;
            echo '<br> Keliling Bidang: '. $this -> kelilingBidang;
            echo '<hr>';
        }
    }
?>