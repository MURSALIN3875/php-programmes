<html>
   <body>
     <form  method="POST" action="radio.php" >
         Enter no 1:-
         <input type="text" name="t1"><br>
          Enter no 2:-
         <input type="text" name="t2"><br>
        <input type="radio" name="r1" value="aa">Addition<br>
        <input type="radio" name="r1" value="bb">Substraction<br>
        <input type="radio" name="r1" value="cc">Division<br>
        <input type="radio" name="r1" value="dd">Multiplication<br>
        <input type="submit">
     </form>
    </body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["r1"];
if($ch==aa)
 add($a,$b);
if($ch==bb)
sub($a,$b);
if($ch==cc)
div($a,$b);
if($ch==dd)
mul($a,$b);

function add($a,$b)
{
  $c=$a+$b;
  echo("<br>Addition:-".$c);
}
function sub($a,$b)
{
 $c=$a-$b;
 echo("<br>Substraction:-".$c);
}
function mul($a,$b)
{
  $c=$a*$b;
echo("<br>Multiplication:-".$c);
}
function div($a,$b)
{
 $c=$a/$b;
 echo("<br>Division:-".$c);
}
?>