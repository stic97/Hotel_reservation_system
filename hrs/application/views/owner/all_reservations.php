<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>To Date</th>
                      <th>From Date</th>
                      <th>Room ID</th>
                      <th>User ID</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>To Date</th>
                      <th>From Date</th>
                      <th>Room ID</th>
                      <th>User ID</th>
                      <th>Price</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
            foreach($allReservations as $row)
            {
            ?>
                    <tr>
                      <td><?php echo $row->to_date; ?></td>
                      <td><?php echo $row->from_date; ?></td>
                      <td><?php echo $row->roomid; ?></td>
                      <td><?php echo $row->userid; ?></td>
                      <td><?php echo $row->price; ?></td>
                    </tr>
            <?php  }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>