<?php
function databaseCon()
{
$database='pizzahut';
$host='localhost';
$user='root';
$pass='';
$link= mysqli_connect($host, $user, $pass, $database);
if($link===false)
  die(mysqli_connect_error ());
return $link;
}
function executeQuery($link,$query)
{
  $result=mysqli_query($link,$query);
  if($result===false)
     die(mysqli_error ($link));
  return $result;        
}

if($_SERVER['REQUEST_METHOD']=="POST" && $_POST['id']){
$id=$_POST['id'];
$link= databaseCon();
$sql="select price from product_details where id=$id";
$result= executeQuery($link, $sql);
$price= mysqli_fetch_assoc($result);
echo $price=$price['price'];
}

