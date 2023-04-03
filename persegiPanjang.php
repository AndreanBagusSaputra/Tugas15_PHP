<?php
    require_once 'Abstract.php';

    class persegiPanjang extends Bentuk2D{
        public $panjang;
        public $lebar;

        public function __constract($panjang, $lebar){
            $this -> panjang = $panjang;
            $this -> lebar = $lebar;
        }

        public function namaBidang(){
            $persegipanjang = 'Persegi Panjang';
            return $persegipanjang;
        }

        public function luasBidang(){
            $luas = $this -> $panjang * $this -> $lebar;
            return $luas;
        }

        public function kelilingBidang(){
            $keliling = 2 * ($this -> $panjang + $this -> $lebar);
            return $keliling;
        }

       
    }


?>