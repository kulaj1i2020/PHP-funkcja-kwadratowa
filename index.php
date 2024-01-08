<?php
$delta=0;
$tab=[];
function kwadrat($a,$b,$c)
{
$delta=($b*$b)-(4*$a*$c);
if($delta==0)
{
   $x=(-$b)/(2*$a);
   return $x;
}
else if(sqrt($delta)>0)
{
   $x1=(-$b-sqrt($delta))/(2*$a);
   $x2=(-$b+sqrt($delta))/(2*$a);

    $tab=array($x1,$x2);
   return $tab;
}
else{
    return 0;
}


}
$a=1;
$b=3;
$c=-4;
if (is_array(kwadrat($a,$b,$c)))
{echo "mamy dwa rozwiazania: x1= ".round(kwadrat($a,$b,$c)[0],2)." x2= ".round(kwadrat($a,$b,$c)[1],2);

}
else if (kwadrat($a,$b,$c)!=null)
{echo "mamy jedno rozwiazanie: x1= ".round(kwadrat($a,$b,$c),2);

}
else
echo "brak rozwiazan";
?>