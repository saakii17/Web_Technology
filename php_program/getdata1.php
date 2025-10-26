<?php
$roll = $_POST["sroll"];

$conn = new mysqli("localhost", "root", "", "college_db");
if ($conn) 
{
    $stat = $conn->prepare("DELETE FROM student WHERE Roll_No = ?");
    $stat->bind_param("i", $roll);
    if ($stat->execute()) 
    {
        echo "Data Deleted";
    } 
    else 
    {
        echo "Delete Failed";
    }
} 
else 
{
    echo "Error in Connection";
}
