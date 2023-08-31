<html>
  <body>
     <form method="POST">
        Enter No:-
        <input type="text" name="t1"><br>
       <input type="submit" value="Check even or odd">
        <input type="reset" value="clear">
     </form>
   </body>
</html>
<?php
$n=$_POST["t1"];
if($n%2==0)
echo("Number is Even".$n);
else
echo("Number is odd".$n);
?>