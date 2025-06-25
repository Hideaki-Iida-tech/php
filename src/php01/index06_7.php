<?php
$count=0;
while($count<=100){
    $count++;
    if($count%3==0 || $count>=20){
        continue;
    }
    echo $count . '<br />';
}