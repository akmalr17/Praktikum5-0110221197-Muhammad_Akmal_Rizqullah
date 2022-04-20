<?php

    class Account {
        public $norek;
        public $saldo;

        public function __construct($norek, $saldo) {
            $this->norek = $norek;
            $this->saldo = $saldo;
        }

        public function deposit($n) {
            $this->saldo = ($n + $this->saldo); 
        }

        public function withdraw($n) {
            $this->saldo = ($this->saldo - $n);
        }

        public function cetak() {
            echo "Nomor Rekening : " . $this->norek . "<br>";
            echo "Saldo : " . $this->saldo . "<br>";
        }
    }


    class accountbank extends Account {
        public $costumer;
        static $admin = 6500;


        public function __construct($norek, $saldo, $costumer) {
            parent::__construct($norek, $saldo);
            $this->costumer = $costumer;
        }

        public function transfer($acc_tujuan, $n) {
            $acc_tujuan->deposit($n);
            $this->withdraw($n);
            $this->withdraw(self::$admin);
        }
        public function cetak() {
            parent::cetak();
            echo "<br>";
            echo "Nama Costumer : " . $this->costumer;
        }
    }
?>