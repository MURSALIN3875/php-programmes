<html>
    <body bgcolor="yellow">
<head>
<style>
   input
   {
    margin-top:3%;
    margin-left:2%;
  }
</style>
</head>
     <form method="POST">
      Enter Roll No:-
      <input type="text" name="rno"><br> 
     Enter Name:-
      <input type="text" name="name"><br>
     Enter java marks:-
      <input type="text" name="java"><br>  
     Enter php marks:-
      <input type="text" name="php"><br>  
      Enter python marks:-
      <input type="text" name="python"><br>  
      Enter ds marks:-
      <input type="text" name="ds"><br>  
      Enter tcs marks:-
      <input type="text" name="tcs"><br>  
      <input type="submit" value="done">
      <input type="reset" value="clear">
    </form>
    </body>
</html>
<?php
$rno=$_POST["rno"];
$name=$_POST["name"];
$java=$_POST["java"];
$php=$_POST["php"];
$python=$_POST["python"];
$ds=$_POST["ds"];
$tcs=$_POST["tcs"];

$total=$java+$python+$php+$ds+$tcs;
$per=$total/5;

echo("roll No:-".$rno);
echo("\n name:-".$name);
echo("\n Total Marks:-".$total);
echo("\nPercentage:-".$per);
?>