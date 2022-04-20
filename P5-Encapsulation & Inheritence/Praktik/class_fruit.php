<?php

    class fruit {
        //public $name;
        //protected $color;
        //private $weight;

        public $name;
        public $color;
        public $weight;


        function set_name($n) {
            $this->name = $n;
        }

        protected function set_color($n) {
            $this->color = $n;
        }

        private function set_weight($n) {
            $this->weight = $n;
        }
    }

    $mango = new fruit();
    $mango->set_name('Mango'); //Ok
    $mango->set_color('Yellow');//Error
    $mango->set_weight('300'); //Error

    /*  
    $mango = new fruit();
    $mango->name = 'Mango'; // ok
    $mango->color = 'Yellow'; // Error
    $mango->weight = '300'; //Error
    */
?>
