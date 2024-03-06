<?php
for($i=5;$i>=0;$i=$i-1)
{
    echo $i."\n";
}
function recursive($n)
{
    if($n==0)
    {
        return;
    }
    echo $n."\n";
    recursive($n-1);
}
recursive(10);

?>