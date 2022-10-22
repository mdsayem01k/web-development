<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn= mysqli_connect("localhost","root","","mydb") or die("connection failed");
    $sql="SELECT * FROM teacher
    ORDER BY ID";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Designation'];?></td>
                <td><?php echo $row['Phone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['ID'];?> && Name=<?php echo $row['Name'];?> && Designation=<?php echo $row['Designation'];?> && Phone=<?php echo $row['Phone'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['ID'];?>'>Delete</a>
                </td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</div>
</div>
</body>
</html>
