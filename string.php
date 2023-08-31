<?php
$s="rbnb college shrIrAmpur";
$cnt=0;
$c=0;
for($i=0;@$s[$i]!=null;$i++)
{
 $cnt++;
}
echo("<br>String length:-".$cnt);
for($i=0;@$s[$i]!=null;$i++)
{
 if($s[$i]=='A'||$s[$i]=='a'||$s[$i]=='E'||$s[$i]=='e'||$s[$i]=='I'||$s[$i]=='i'||$s[$i]=='O'||$s[$i]=='o'||$s[$i]=='U'||$s[$i]=='u')
  {
    $c++;
  }
}
echo("<br> Vowels:-".$c);
?>