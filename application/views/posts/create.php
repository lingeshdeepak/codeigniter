<!-- <h2><?= $title; ?></h2> -->

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>First name</label>
    <input type="text" class="form-control" name="fname" placeholder="Add first name">
  </div>
  <div class="form-group">
    <label>Last name</label> 
    <input type="text" class="form-control" name="lname" placeholder="Add last name">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" name="age" placeholder="Add age">
  </div>
  <button type="submit" class="btn btn-success" >SUBMIT</button>
