<?php
function sub($x1, $x2)
{
    $sub= $x1-$x2;
    echo "The sub of $x1 and $x2 is $sub" ;
}


function div($y1, $y2)
{
    $div=$y1/$y2;
    echo "The div of $y1 and $y2 is $div";
}

function process($n1,$n2,$cb)
{
    $cb($n1,$n2);
}
process(20,30,"div");


?>