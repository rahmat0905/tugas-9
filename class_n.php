<?php 
    class nilaisantri{
        public $nama;
        public $nilai;
        public $kuliah = 'PeTIK Jombang';

        function _construct($nama,$nilai){
            $this->nama = $nama;
            $this->nilai = $nilai;
        }

        public function gethasil(){
            if($this->nilai > 70) return 'Lulus';
            else return 'Tidak Lulus';
        }

    }
?>