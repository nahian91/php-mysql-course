<?php
    class Animal {
        
        public $color, $weight, $food;

        public function __construct($c, $w, $f) {
            $this->color = $c;
            $this->weight = $w;
            $this->food = $f;
        }

        public function color() {
            echo $this->color;
        }
        public function weight() {
            echo $this->weight;
        }
        public function food() {
            echo $this->food;
        }
    }
?>