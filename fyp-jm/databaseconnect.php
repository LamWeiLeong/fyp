<?php
$connect= mysqli_connect("localhost","root","","fyp");
if(!$connect)
{
    die("Connection failed : ". myqsli_connect_error());
}
else
{
  echo("Connect successfully!");
}
?>
