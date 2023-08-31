<html>
   <body>
      <form method="POST" action="strings.php">
        Enter first string
        <input type="text"  name="t1"><br>
        Enter two string
        <input type="text"  name="t2"><br>
          1.search string<br>
           2.search position<br>
          <input type="number" name="ch"><br>
          <input type="submit" value="submit"><br>
      </form>
    </body>
</html>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$n=$_POST["ch"];

if($n==1)
{
  $k=strstr($s1,$s2);
  if($k==null)
    echo("substring not found");
 else
    echo("substring  found");
}
if($n==2)
{
  $k=strpos($s1,$s2);
  if($k==null)
    echo("substring not found");
 else
    echo("substring  found".$k);
}
?>
