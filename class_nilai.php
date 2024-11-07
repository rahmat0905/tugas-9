<?php 
    class nilaisantri{
        public $nama;
        public $nilai;
        public $sekolah = 'PeTIK';

        public function gethasil(){
            if($this->nilai > 70) return 'Lulus';
            else return 'Tidak Lulus';
        }

    }
?>