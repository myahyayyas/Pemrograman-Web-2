<?php
    class PersegiPanjang {
        public $panjang;
        public $lebar;

        function __construct($panjang, $lebar) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        function getLuas() {
            return $this->panjang * $this->lebar;
        }

        function getKeliling() {
            return 2 * ($this->panjang + $this->lebar);
        }
    }
?>