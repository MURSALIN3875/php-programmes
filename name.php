<html>
  <body>
     <form method="POST" action="name.php">
        Enter name:-
        <input type="text" name=" t1"><br>
        <input type="submit" value="OK">
     </form>
  </body>
</html>
<?php
 $s=$_POST["t1"];
$p="^[A-Z][a-z]+ [A-Z][a-z]+";
if(ereg($p,$s))
   echo("valid");
else
  echo("Invalid");
?>