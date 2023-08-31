<html>
<body>
  <form method="POST">
   Enter No:-
<input type="text" name="t1"><br>
  <input type="submit" value="sum">
   <input type="reset" value="clear">
  </form >
</body>
</html>
<?php
$n=$_POST["t1"];
for($i=1;$i<=$n;$i++)
{
 $f=$f+$i;
}
echo("sum:-".$f);
?>