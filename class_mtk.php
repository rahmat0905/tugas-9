<?php 

    class matematika {
        const PHI = 3.14;
        
        public static $counter = 100;

        public static function tambahkan($a,$b){
            return $a - $b;
        }

        public static function naikancounter(){
            self::$counter;
        }

        public static function luaslingkaran($jari){
            $luas = self::PHI * $jari * $jari;
            return $luas;
    }

    
    
}
?>