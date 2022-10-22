<?php
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];


$conn= mysqli_connect("localhost","root","","mydb") or die("connection failed");
$sql=" insert into teacher ( ID,Name,Address,phone)
        values('{$id}','{$name}','{$address}','{$phone}')";
$result=mysqli_query($conn,$sql) or die("query unseccessful");


header ("location: http://localhost/crud_html/index.php");

mysqli_close($conn);

?>