<?php
function getTriangle(float $width,float $height):float{
    return $width * $height /2;
}
function getSquare(float $width,float $height):float{
    return $width * $height;
}
function getDaikei(float $top, float $bottom,float $height):float{
    return($top+$bottom)*$height/2;
}
echo getTriangle(3,3) . "<br />";
echo getSquare(3,3) . "<br />";
echo getDaikei(2,3,2) . "<br />";