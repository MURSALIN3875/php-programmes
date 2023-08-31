<html>
   <body>
      <form method="POST" action="admission.php">
           Enter Roll No:-
           <input type="text" name="t1"><br><br>
           Enter Name:-
           <input type="text" name="t2"><br><br>
         Enter phone no:-
           <input type="text" name="t3"><br><br>
         Enter Email:-
           <input type="text" name="t4"><br><br>
         Enter Date:-
           <input type="text" name="t5"><br><br>
           <input type="submit" value="submit"><br><br>
       </form>
   </body>
</html>
<?php
 $roll="[0-9]";
 $s=$_POST["t1"];
 if(ereg($roll,$s))
   echo("Roll no:-".$s);
else
   echo("Invalid roll no");

$name="[a-z]";
$s1=$_POST["t2"];
 if(eregi($name,$s1))
     echo("Name:-".$s1);
else
     echo("Name is invalid");

$phone="[0-9]";
$s3=$_POST["t3"];
if(ereg($phone,$s3))
     echo("Phone Number is:-".$s3);
else
    echo("Phone number is invalid");

$email="[a-z]+@[a-z]+.com";
$s4=$_POST["t4"];
if(eregi($email,$s4))
  echo("Email:-".$s4);
else
   echo("Emali is invalid");

$dat="[0-9]{2}+/[0-9]{2}+/[0-9]{4}";
$s5=$_POST["t5"];

if(ereg($dat,$s5))
  echo("Date:-".$s5);
else
   echo("Date invalid");
?>























