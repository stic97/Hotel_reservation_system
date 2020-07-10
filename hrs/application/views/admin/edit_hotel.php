<?=form_open(base_url()."admin/hotels/".$hotel->id."/save");?>
  <div class="form-group">
    <label for="first_name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $hotel->name;?>">
  </div>
  <div class="form-group">
    <label for="last_name">Location</label>
    <input type="text" class="form-control" id="location" name="location" placeholder="Enter location" value="<?=$hotel->location;?>">
  </div>
  <div class="form-group">
    <label for="email">Surface</label>
    <input type="text" class="form-control" id="surface" name="surface" aria-describedby="emailHelp" placeholder="Enter surface" value="<?=$hotel->surface;?>">
  </div>
  <div class="form-group">
    <label for="jmbg">OwnerID</label>
    <input type="text" class="form-control" id="ownerid" name="ownerid" placeholder="Enter OwnerID" value="<?=$hotel->ownerid;?>">
  </div>
  <div class="form-group">
    <label for="phone">Rooms</label>
    <input type="text" class="form-control" id="rooms_number" name="rooms_number" placeholder="Enter number of rooms" value="<?=$hotel->rooms_number;?>">
  </div>
  <div class="form-group">
    <label for="card_number">Bathrooms</label>
    <input type="text" class="form-control" id="bathrooms_number" name="bathrooms_number" placeholder="Enter Nnumber of bathrooms" value="<?=$hotel->bathrooms_number;?>">
  </div>
  <div class="form-group">
    <label for="card_number">Garages</label>
    <input type="text" class="form-control" id="garages_number" name="garages_number" placeholder="Enter number of garages" value="<?=$hotel->garages_number;?>">
  </div>
  <div class="form-group">
    <label for="card_number">Picture</label>
    <input type="file" class="form-control " id="picture" name="picture"  value="<?=$hotel->picture;?>">
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <?=form_close();?>