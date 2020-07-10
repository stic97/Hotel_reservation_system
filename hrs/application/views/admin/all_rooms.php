<div class="card shadow mb-4" >
<a  href="<?=base_url()?>admin/rooms/add" role="button" class="btn btn-outline-success">Add Rooms</a>
</div>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Price</th>
                      <th>Terrace</th>
                      <th>Kitchen</th>
                      <th>Room Type</th>
                      <th>Air Conditioner</th>
                      <th>HotelID</th>
                      <th>Edit</th>
                      <th>Delete</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
					  <th>Price</th>
                      <th>Terrace</th>
                      <th>Kitchen</th>
                      <th>Room Type</th>
                      <th>Air Conditioner</th>
                      <th>HotelID</th>
                      <th>Edit</th>
                      <th>Delete</th>

                    </tr>
				  </tfoot>
				  <tbody>
				  <?php foreach ($allRooms as $row)
				  {
					?>
                    <tr>
                      <td><?php echo $row->price; ?>$</td>
					  <td><?php if($row->terrace == 1):?>
					  Yes</td>
					  <?php else:?>
				      No </td> <?php endif;?>
                      <td><?php if($row->kitchen == 1):?>
					  Yes</td>
					  <?php else:?>
				      No </td> <?php endif;?>
                      <td><?php echo $row->room_type; ?></td>
					  <td><?php if($row->air_conditioner == 1):?>
					  Yes</td>
					  <?php else:?>
				      No </td> <?php endif;?>
                      <td><?php echo $row->hotelid; ?></td>
                      <td><a href="<?=base_url()?>admin/rooms/<?=$row->id?>/edit" class="btn btn-outline-primary" role="button">Edit </button></td>
                      <td><a href="<?=base_url()?>admin/rooms/<?=$row->id?>/delete"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger" role="button">Delete</button></td>
                    </tr>
				  <?php } ?>
				  </tbody>
			</table>
        </div>
        </div>
        </div>