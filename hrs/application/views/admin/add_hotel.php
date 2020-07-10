<?=form_open(base_url()."admin/hotels/submitHotel");?>
<div class="form-group">
    <label for="first_name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="last_name">Location</label>
    <input type="text" class="form-control" id="location" name="location" placeholder="Enter location">
  </div>
  <div class="form-group">
    <label for="email">Surface</label>
    <input type="text" class="form-control" id="surface" name="surface" aria-describedby="emailHelp" placeholder="Enter surface" >
  </div>
  <div class="form-group">
    <label for="jmbg">OwnerID</label>
    <input type="text" class="form-control" id="ownerid" name="ownerid" placeholder="Enter OwnerID">
  </div>
  <div class="form-group">
    <label for="phone">Rooms</label>
    <input type="text" class="form-control" id="rooms_number" name="rooms_number" placeholder="Enter number of rooms">
  </div>
  <div class="form-group">
    <label for="card_number">Bathrooms</label>
    <input type="text" class="form-control" id="bathrooms_number" name="bathrooms_number" placeholder="Enter Nnumber of bathrooms">
  </div>
  <div class="form-group">
    <label for="card_number">Garages</label>
    <input type="text" class="form-control" id="garages_number" name="garages_number" placeholder="Enter number of garages">
  </div>
  <div class="form-group">
    <label for="card_number">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
  </div>
  <div class="form-group">
    <label for="card_number">Date Modified</label>
    <input type="date" class="form-control" id="date_modified" name="date_modified" placeholder="Enter description">
  </div>
  <div class="form-group">
    <label for="card_number">Stars</label>
    <input type="text" class="form-control" id="stars" name="stars" placeholder="Enter stars">
  </div>
  <div class="form-group">
    <label for="card_number">Picture</label>
    <input type="file" class="form-control " id="picture" name="picture">
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <?php form_close() ?>