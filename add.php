<?php
$link = mysqli_connect("localhost", "root", "", "stevesdatabase");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO Car (Car, Color, Year) VALUES ('Honda', 'Red', '1996')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
