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
                      <th>Price</th>
                      <th>Clear Reservation</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
            foreach($myReservations as $row)
            {
            ?>
                    <tr>
                      <td><?php echo $row->to_date; ?></td>
                      <td><?php echo $row->from_date; ?></td>
                      <td><?php echo $row->roomid; ?></td>
                      <td><?php echo $row->price; ?></td>
                      <td><a href="<?=base_url()?>user/reservations/<?=$row->id?>/delete"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger" role="button">Clear</button></td>
                    </tr>
            <?php  }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>