<?php
    class Student {
        public $name, $subject, $age;

        function __construct($n = 'Demo Name', $s = 'Demo Subject', $a = 'Demo Age') {
            $this->name = $n;
            $this->subject = $s;
            $this->age = $a;
        }

        function __destruct() {
            echo $this->name .'<br/>';
            echo $this->subject .'<br/>';
            echo $this->age .'<br/>';
        }
    }
    new Student('Hollard', 'Physics', 33);
    new Student('Micheal Doe', 'Bangla', 24);
    new Student('Hello David', 'Math', 25);
    
?>