<?php

$connection=mysqli_connect("localhost","root","","test");
if(!$connection)
    die(mysqli_connect_error());
 // else
 //    echo "Connected!!"."<br>";

$sql="SELECT No,Name FROM records";
//$result = $connection->query($sql);
//$row = $result->fetch_assoc();	



$result=mysqli_query($connection,$sql);

$rows=array();
while($r=mysqli_fetch_assoc($result))
{
// echo $row["No"].$row["Name"]."<br>";
$rows[]=$r;
// echo json_encode($row["No"].$row["Name"]);
// echo json_encode("<br>") ;
}
echo json_encode($rows);
?>