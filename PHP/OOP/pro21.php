<?php
    /*
        HAS A Relationship

        Mahindra Has A Engine
        Tata Has A Engine
    */ 
   
    class Engine{
        public function __construct(){
            echo "<hr>Constructor of Engine Class ";
        }
    }

    class Mahindra{
        private $engine;
        public function __construct(){
            $this->engine = new Engine(); // HAS A
        }
    }

    class Tata{
        private $engine;
        public function __construct(){
            $this->engine = new Engine(); // HAS A
        }
    }
?>