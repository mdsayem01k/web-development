<?php
$id=$_GET['id'];
$conn= mysqli_connect("localhost","root","","mydb") or die("connection failed");
$sql="Delete from teacher where ID={$id}";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Delete successfully";
}

//header ("location: http://localhost/crud_html/index.php");
mysqli_close($conn);
?>
