<?php
    /*

        So, when a child class is inherited from an abstract class, we have the following rules:

        The child class method must be defined with the same name and it redeclares the parent abstract method
        The child class method must be defined with the same or a less restricted access modifier
        The number of required arguments must be the same. However, the child class may have optional arguments in addition
    */ 

    abstract class RBI{
        abstract public function deposit();
        abstract public function ATM();
        abstract public function UPI();
    }

    class AXIS extends RBI{
        public function deposit(){
            echo "<hr> Axis Bank Accept Deposit Amount";
        }

        public function UPI(){
            echo "<hr> Axis Bank Have no UPI Facility";
        }

        public function ATM(){
            echo "<hr> Axis Bank Have ATM Machines";
        }
    }

    class SBI extends RBI{
        public function deposit(){
            echo "<hr> SBI Bank Accept Deposit Amount";
        }

        public function UPI(){
            echo "<hr> SBI Bank Have UPI Facility";
        }

        public function ATM(){
            echo "<hr> SBI Bank Have ATM Machines";
        }
    }

    $axisBank = new AXIS();
    $axisBank->deposit();
    $axisBank->ATM();
    $axisBank->UPI();

    $sbiBank = new SBI();
    $sbiBank->deposit();
    $sbiBank->ATM();
    $sbiBank->UPI();

?>