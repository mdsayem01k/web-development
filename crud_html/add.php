<?php include 'header.php'; ?>
<div id="main-content">
    <h2 >Add New Record</h2>
    <form class="post-form" action="insert.php" method="post">
      <div class="form-group">
          <label>ID</label>
          <input type="text" name="id" value=""/>
      </div>
      <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" value=""/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value=""/>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value=""/>
      </div>
      <input class="submit" type="submit" value="ADD"/>
    </form>
</div>
</div>


