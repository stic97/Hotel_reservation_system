<div class="card shadow mb-4" >
<a  href="<?=base_url()?>admin/hotels/add" role="button" class="btn btn-outline-success">Add Hotel</a>
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
                      <th>Name</th>
                      <th>Location</th>
                      <th>Surface</th>
                      <th>OwnerID</th>
                      <th>Number of Rooms</th>
                      <th>Bathrooms Number</th>
                      <th>Garages Number</th>
                      <th>Picture</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Surface</th>
                      <th>OwnerID</th>
                      <th>Number of Rooms</th>
                      <th>Bathrooms Number</th>
                      <th>Garages Number</th>
                      <th>Picture</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
            foreach($allHotels as $row)
            {
            ?>
                    <tr>
                      <td><?php echo $row->name; ?></td>
                      <td><?php echo $row->location; ?></td>
                      <td><?php echo $row->surface; ?></td>
                      <td><?php echo $row->ownerid; ?></td>
                      <td><?php echo $row->rooms_number; ?></td>
                      <td><?php echo $row->bathrooms_number; ?></td>
                      <td><?php echo $row->garages_number; ?></td>
                      <td><?php echo $row->picture; ?></td>
                      <td><a href="<?=base_url()?>admin/hotels/<?=$row->id?>/edit" class="btn btn-outline-primary" role="button">Edit </button></td>
                      <td><a href="<?=base_url()?>admin/hotels/<?=$row->id?>/delete"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger" role="button">Delete</button></td>
                    </tr>
            <?php  }  ?>
                </tbody>
            </table>
        </div>
        </div>
        </div>