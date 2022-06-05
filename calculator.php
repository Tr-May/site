<?php 
    function calculate($optr,$a,$b){
        switch ($optr) {
            case '+':
                return $a + $b;
                break;
            case '-':
                return $a - $b;
                break;
            case '*':
                return $a * $b;
                break;
            case '/':
                return $a / $b;
                break;
        }
    }
?>