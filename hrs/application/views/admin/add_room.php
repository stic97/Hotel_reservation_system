<?=form_open(base_url()."admin/hotels/submitRoom");?>
<div class="form-group">
    <label for="first_name">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
  </div>
  <div class="form-group">
    <label for="last_name">Terrace</label>
    <input type="text" class="form-control" id="terrace" name="terrace" placeholder="Enter terrace">
  </div>
  <div class="form-group">
    <label for="email">Kitchen</label>
    <input type="text" class="form-control" id="kitchen" name="kitchen"  placeholder="Enter kitchen">
  </div>
  <div class="form-group">
    <label for="jmbg">Room type</label>
    <input type="text" class="form-control" id="room_type" name="room_type" placeholder="Enter room type">
  </div>
  <div class="form-group">
    <label for="phone">Air conditioner</label>
    <input type="text" class="form-control" id="air_conditioner" name="air_conditioner" placeholder="Enter air conditioner">
  </div>
  <div class="form-group">
    <label for="card_number">Hotel ID</label>
    <input type="text" class="form-control" id="hotelid" name="hotelid" placeholder="Enter hotel id">
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <?php form_close() ?>