<?=form_open(base_url()."admin/pictures/submitPicture");?>
<div class="form-group">
    <label for="first_name">Picture </label>
    <input type="file" class="form-control" id="picture" name="picture"  >
  </div>
  <div class="form-group">
    <label for="last_name">HotelID</label>
    <input type="text" class="form-control" id="hotelid" name="hotelid" placeholder="Enter location" >
  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <?= form_close() ?>