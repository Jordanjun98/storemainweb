<html>
<?php
///Establishing connection with database
$Connection=mysqli_connect('localhost','test','LEmoxf2hWtq2UI8Y','userdata');
if($Connection){
  echo "Database connected<br>";
}
else{
  echo"Error connection";
}
$Selected=mysqli_select_db($Connection,'userdata'); //Selecting database
if ($Selected){
  echo "Database selected<br>";
}
else{
  echo "error";
}
?>
</html>
