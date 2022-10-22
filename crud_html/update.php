<?php
$id=$_REQUEST['id'];
$name=$_POST['name'];
$Designation=$_REQUEST['Designation'];
$Phone=$_REQUEST['Phone'];


$conn= mysqli_connect("localhost","root","","mydb") or die("connection failed");
$sql=" UPDATE teacher
SET Name='{$name}',Designation='{$Designation}',Phone='{$Phone}'
WHERE ID='{$id}'";
$result=mysqli_query($conn,$sql) or die("query unseccessful");
if($result){
    echo "update successfully";
}

//header ("location: http://localhost/crud_html/index.php");

mysqli_close($conn);

?>