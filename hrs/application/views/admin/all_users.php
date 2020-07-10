<!-- Users Table -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>JMBG</th>
                      <th>Phone</th>
                      <th>Card Number</th>
                      <th>Role</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>JMBG</th>
                      <th>Phone</th>
                      <th>Card Number</th>
                      <th>Role</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
            foreach($allUsers as $row)
            {
            ?>
                    <tr>
                      <td><?php echo $row->first_name; ?></td>
                      <td><?php echo $row->last_name; ?></td>
                      <td><?php echo $row->email; ?></td>
                      <td><?php echo $row->jmbg; ?></td>
                      <td><?php echo $row->phone; ?></td>
                      <td><?php echo $row->card_number; ?></td>
                      <td><?php echo $row->role; ?></td>
                      <td><a href="<?=base_url()?>admin/users/<?=$row->id?>/edit" class="btn btn-outline-primary" role="button">Edit</a></td>
                      <td><a href="<?=base_url()?>admin/users/<?=$row->id?>/delete"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger" role="button">Delete</a></td>
                    </tr>
            <?php  }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    