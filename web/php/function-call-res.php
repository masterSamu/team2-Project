<?php
    session_start();
    function clickNumb1() { 
        $_SESSION['totalprice']= $classicSingle->totalPrice;
        $_SESSION['roomName'] = $classicSingle->name;
    }
    function clickNumb2() {
        $_SESSION['totalprice']= $classicTwins->totalPrice;
        $_SESSION['roomName'] = $classicTwins->name;
    }
    function clickNumb3() {
        $_SESSION['totalprice']= $standardDouble->totalPrice;
        $_SESSION['roomName'] = $standardDouble->name;
    }  




?>