<html>
   <body>
<title>
 Array operation
</title>
    <form method="POST" action="stack.php">
     1.Enter element in stack:-<input type="number" name="t1"><br>
     2.delete element in stack:-<br>
     3.display element in stack:-<br>
     4.Enter element in queue:-<input type="number" name="t2"><br>
     5.delete element in queue:-<br>
     6.display element in queue:-<br>
     Enter choice:-<input type="number" name="choice"><br>
     <input type="Submit" value="submit">
      <input type="reset" value="clear">
   </form>
   </body>
</html>

<?php
$a=array(1,2,3,4,5);
echo("Given Array:-<br>");
print_r($a);
$ch=$_POST["choice"];
switch($ch)
  {
     case 1:$num=$_POST["t1"];
                array_push($a,$num);
		echo("<br>array after element insert:-<br>");
                print_r($a);
                break;

    case 2:array_pop($a);
               echo("<br>array after element delete:-<br>");
                print_r($a);
                break;

    case 3: echo("<br>Array :-<br>");
                 print_r($a);
                break;

     case 4:$num1=$_POST["t2"];
                array_unshift($a,$num1);
		echo("<br>Queue after element insert:-<br>");
                print_r($a);
                break;
  
     case 5:array_shift($a);
               echo("<br>queue after element delete:-<br>");
                print_r($a);
                break;

    case 6:echo("<br>Queue:-<br>");
                 print_r($a);
                break;
  } 
?>