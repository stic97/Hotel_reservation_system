<?=form_open(base_url()."user/data/".$user->id."/save");?>
<?php if(isset($new_errors)):?>
    <div id="new_errors" class="alert alert-danger" role="alert">
    <?php  echo $new_errors;?>
    </div>
<?php endif;?>
  <div class="form-group">
    <label for="first_name">First name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" value="<?=$user->first_name;?>">
  </div>
  <div class="form-group">
    <label for="last_name">Last name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" value="<?=$user->last_name;?>">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value=<?=$user->email;?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="jmbg">JMBG</label>
    <input type="text" class="form-control" id="jmbg" name="jmbg" placeholder="Enter JMBG" value=<?=$user->jmbg;?>>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="<?=$user->phone;?>">
  </div>
  <div class="form-group">
    <label for="card_number">Card number</label>
    <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Enter card number" value=<?=$user->card_number;?>>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <?= form_close()?>