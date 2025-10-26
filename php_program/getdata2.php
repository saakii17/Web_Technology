<?php
$roll = $_POST["sroll"];
$name = $_POST["sname"];
$marks = $_POST["smarks"];

$conn = new mysqli("localhost", "root", "", "college_db");
if ($conn) {
    $stat = $conn->prepare("UPDATE student SET Name=?, Marks=? WHERE Roll_No=?");
    $stat->bind_param("sii", $name, $marks, $roll);
    if ($stat->execute()) {
        echo "Data Updated";
    } else {
        echo "Update Failed";
    }
} else {
    echo "Error in Connection";
}
?>
