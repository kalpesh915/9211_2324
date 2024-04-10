<?php
    /*
        PHP Namespaces
        
    */ 

    namespace HTML;
    class Table{
        public function __construct(){
            echo "<hr>Table Class of HTML NameSpace<hr>";
        }
    }

    namespace Furnature;
    class Table{
        public function __construct(){
            echo "<hr>Table Class of Furniture NameSpace<hr>";
        }
    }

    $obj1 = new Table();
?>