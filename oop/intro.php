<?php
    // class Student {
    //     public $name = 'John Doe';
    //     public $age = 20;
    // }
    // $obj = new Student();
    // echo $obj->name . '<br/>';
    // echo $obj->age;

    // class Math {
    //     public $a, $b, $c;
    //     function sum() {
    //         $this->c = $this->a + $this->b;
    //         return $this->c;
    //     }
        
    //     function subtraction() {
    //         $this->c = $this->a - $this->b;
    //         return $this->c;
    //     }
    // }
    // $math = new Math();
    // $math->a = 20;
    // $math->b = 10;
    // echo $math->sum();
    // echo '<br/>';
    // echo $math->subtraction();

    class Math {
        function sum($a, $b) {
            $c = $a + $b;
            return $c;
        }
        
        function subtraction($a, $b) {
            $c = $a - $b;
            return $c;
        }
    }
    $math = new Math();
    echo $math->sum(20, 30);
    echo '<br/>';
    echo $math->sum(11, 22);
    echo '<br/>';
    echo $math->subtraction(33, 12);
    echo '<br/>';
    echo $math->subtraction(44, 24);
?>