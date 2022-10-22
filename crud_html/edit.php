<?php include 'header.php'; ?>
<?php
 echo $_REQUEST['id'];
 echo $_REQUEST['Name'];
 echo $_REQUEST['Designation'];
 echo $_REQUEST['Phone'];

 ?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="update.php?id=<?php echo $_REQUEST['id'];?>" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" value=" <?php  echo $_REQUEST['Name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Designation</label>
          <input type="text" name="Designation" value="<?php  echo $_REQUEST['Designation']; ?>"/>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="Phone" value="<?php  echo $_REQUEST['Phone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
</div>

