<?php

    Function reverseNumber($input){
        $num=0;
        while($input>1){

            $num=($num*10)+($input%10);
            $input=$input/10;
        }
        return $num;
    }
    echo reverseNumber(23456);

?>