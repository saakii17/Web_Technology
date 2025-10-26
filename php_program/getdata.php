<?php

$name=$_POST["sname"];
$marks=$_POST["smarks"];

$conn=new mysqli("localhost","root","","college_db");
if($conn)
{
  $stat=$conn->prepare("insert into student (name,marks) values(?,?)");
  $stat->bind_param("si",$name,$marks);
  if($stat->execute())
  {
    echo"Data is Inserted";
  }
  else{
    echo"Data is not Inserted";
  }
}
else{
    echo "Error is Connection";
}

/*$arr=["StudentName"=>$name,"StudentMarks"=>$marks];
$response=json_encode($arr);
header("Content-Type:application/json");
echo $response;*/
?>     