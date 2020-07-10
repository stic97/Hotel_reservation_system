<?=form_open(base_url()."user/password/".$_SESSION['user_id']."/change");?>
<?php if(isset($_SESSION['password_error'])):?>
    <div id="password_error" class="alert alert-danger" role="alert">
    <?php  echo $_SESSION['password_error'];?>
    </div>
<?php endif;?>
  <div class="form-group">
    <label for="first_name">Old Password</label>
    <input type="password" class="form-control" id="first_name" name="password" placeholder="Enter old pass">
  </div>
  <div class="form-group">
    <label for="last_name">New Password</label>
    <input type="password" class="form-control" id="last_name" name="password2" placeholder="Enter new pass" >
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <?= form_close()?>