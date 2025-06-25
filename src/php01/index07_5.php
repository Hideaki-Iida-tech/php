<?php
function goukaku(int $score1,int $score2,int $score3):void{
    $total=$score1+$score2+$score3;
   if($total>210){
        echo "合計点は{$total}なので合格です<br />";
    }else{
        echo "合計点は{$total}なので不合格です<br />";
    }
}
echo (goukaku(100,100,20));