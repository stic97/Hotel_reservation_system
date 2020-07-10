<div class="card shadow mb-4" >
<a  href="<?=base_url()?>admin/pictures/add" role="button" class="btn btn-outline-success">Add Picture</a>
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
                      <th>Picture</th>
                      <th>Hotel ID</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Picture</th>
                      <th>Hotel ID</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
            foreach($allPictures as $row)
            {
            ?>
                    <tr>
                      <td><?php echo $row->picture; ?></td>
                      <td><?php echo $row->hotelid; ?></td>
                      <td><a href="<?=base_url()?>admin/pictures/<?=$row->id?>/edit" class="btn btn-outline-primary" role="button">Edit </button></td>
                      <td><a href="<?=base_url()?>admin/pictures/<?=$row->id?>/delete"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger" role="button">Delete</button></td>
                    </tr>
            <?php  }  ?>
                </tbody>
            </table>
        </div>
        </div>
        </div>