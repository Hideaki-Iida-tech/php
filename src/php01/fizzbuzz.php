<?php
for($i=1;$i<=50;$i++){ 
    $flag1=false;
    for($j=3;$j<=50;$j+=3){
        if($i===$j){
            $flag1=true;
            break;
        }
    }
    $flag2=false;
    for($j=5;$j<=50;$j+=5){
        if($i===$j){
            $flag2=true;
            break;
        }
    }
    if($flag1 && $flag2){
        echo "FizzBuzz<br />";
    }elseif($flag1){
        echo "Fizz<br />";
    }elseif($flag2){
        echo "Buzz<br />";
    }else{
        echo $i . '<br />';
    }

}