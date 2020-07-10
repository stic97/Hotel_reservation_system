<?=form_open(base_url()."admin/rooms/".$room->id."/save");?>
  <div class="form-group">
    <label for="first_name">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" value="<?= $room->price;?>">
  </div>
  <div class="form-group">
    <label for="last_name">Terrace</label>
    <input type="text" class="form-control" id="terrace" name="terrace" placeholder="Enter terrace" value="<?=$room->terrace;?>">
  </div>
  <div class="form-group">
    <label for="email">Kitchen</label>
    <input type="text" class="form-control" id="kitchen" name="kitchen"  placeholder="Enter kitchen" value="<?=$room->kitchen;?>">
  </div>
  <div class="form-group">
    <label for="jmbg">Room type</label>
    <input type="text" class="form-control" id="room_type" name="room_type" placeholder="Enter room type" value="<?=$room->room_type;?>">
  </div>
  <div class="form-group">
    <label for="phone">Air conditioner</label>
    <input type="text" class="form-control" id="air_conditioner" name="air_conditioner" placeholder="Enter air conditioner" value="<?=$room->air_conditioner;?>">
  </div>
  <div class="form-group">
    <label for="card_number">Hotel ID</label>
    <input type="text" class="form-control" id="hotelid" name="hotelid" placeholder="Enter hotel id" value="<?=$room->hotelid;?>">
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <?=form_close();?>