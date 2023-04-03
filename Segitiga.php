<?php
    require_once 'Abstract.php';

    class Segitiga extends Bentuk2D{
        public $alas;
        public $tinggi;
        public $sisi;

        public function __constract($alas, $tinggi, $sisi){
            $this -> alas = $alas;
            $this -> tinggi = $tinggi;
            $this -> sisi = $sisi;
        }

        public function namaBidang(){
            $segitiga = 'Segitiga';
            return $segitiga;
        }

        public function luasBidang(){
            $luas = 0.5 *  $this -> $alas * $this -> $tinggi;
            return $luas;
        }

        public function kelilingBidang(){
            $keliling = $this -> $sisi + $this -> $sisi + $this -> $sisi;
            return $keliling;
        }

        
    }


?>