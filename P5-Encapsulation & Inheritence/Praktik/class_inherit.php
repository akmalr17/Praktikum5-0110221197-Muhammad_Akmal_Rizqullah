<?php

    class fruit {
        public $name;
        public $color;

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro() {
            echo "The fruit name is {$this->name} and the color is {$this->color}";
        }
    }

    class strawberry extends fruit {
        public function message() {
            echo "Am i a fruit or a Berry?";
        }
    }

    $strbry = new strawberry("Strawberry", "Red");
    $strbry->message();
    echo "<br>";
    $strbry->intro(); 
?>