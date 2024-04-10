<?php
    /*
        PHP Namespaces
        Namespaces are qualifiers that solve two different problems:
        They allow for better organization by grouping classes that work together to perform a task They allow the same name to be used for more than one class

        Declaring a Namespace
        Namespaces are declared at the beginning of a file using the namespace keyword:

        Note: A namespace declaration must be the first thing in the PHP file. The following code would be invalid:
    */ 

    namespace HTML;
    class Table{

    }

    namespace Furnature;
    class Table{

    }

    /*
        For example, you may have a set of classes which describe an HTML table, such as Table, Row and Cell while also having another set of classes to describe furniture, such as Table, Chair and Bed. Namespaces can be used to organize the classes into two different groups while also preventing the two classes Table and Table from being mixed up.
    */
?>