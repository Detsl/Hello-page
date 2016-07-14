<?php
/**
функции к заданию "Калькулятор"
 *
 */
    function doMath ($par1, $par2, $math)
    {
        if ($math == "+")
        {
            return plus($par1, $par2);
        }
        elseif ($math == "-")
        {
            return minus($par1, $par2);

        }
        elseif ($math ==    "*")
        {
            return multiply($par1,$par2);
        }
        elseif ($math ==    "%")
        {
            return remind($par1, $par2);
        }
        else {
            return "Error";
        }


    }

    function calculate ($var1, $var2, $operation)
    {
        switch($operation) {
            case '+':
                return $var1 + $var2;
                break;
            case '-':
                return $var1 - $var2;
                break;
            case '*':
                return $var1 * $var2;
                break;
            case '%   ':
                return $var1 % $var2;
                break;

        }
        if ($var1 = (string)$var1){
            $var1 == (int)$var1; 
        }
        elseif ($var2 = (string)$var2){
            $var2 == (int)$var2;
        }
        else null;
    }

    ?>

<p>
    Математикa</p>
<br>