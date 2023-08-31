<?php
$fh=fopen("f://xyz.txt","r");
if($fh==false)
 die("file not found");

while(!feof($fh))
{
  $ch=fgetc($fh);
  echo($ch);
}
fclose($fh);
?>