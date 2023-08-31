<?php
$n=8;
$f=0;
for($i=2;$i<$n;$i++)
  {
     if($n%$i==0)
      {
        $f=1;
      }
  }
if($f==1)
   echo("Not prime:-".$n);
else
   echo("Number is prime:-".$n);
?>