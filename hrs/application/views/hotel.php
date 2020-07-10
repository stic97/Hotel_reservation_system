	<!-- Page top section -->
	
		<div class="container text-white">
			<h2>SINGLE LISTING</h2>
		</div>

	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Single Listing</span>
		</div>
	</div>

	<!-- Page -->
	<section class="page-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 single-list-page">
				<?php if(isset($pictures)):?>
					<div class="single-list-slider owl-carousel" id="sl-slider">
					<?php foreach ($pictures as $row)
					{
						?>
						<div class="sl-item set-bg" data-setbg="<?=base_url(), $row->picture?>">
							<div class="rent-notic">FOR RENT</div>
						</div>
					<?php } ?>
					</div>
					<div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
					<?php foreach ($pictures as $row)
					{
						?>
						<div class="sl-thumb set-bg" data-setbg="<?=base_url(), $row->picture?>"></div>
						<?php } ?>
					</div>
					<?php endif;?>
					<div class="single-list-content">
						<div class="row">
							<div class="col-xl-8 sl-title">
								<h2><?php echo $hotel->name; ?></h2>
								<p><i class="fa fa-map-marker"></i><?php echo $hotel->location; ?></p>
							</div>
						</div>
						<h3 class="sl-sp-title">Property Details</h3>
						<div class="row property-details-list">
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-th-large"></i> <?php echo $hotel->surface; ?> Square foot</p>
								<p><i class="fa fa-bed"></i> <?php echo $hotel->rooms_number; ?> Rooms</p>
								<p><i class="fa fa-user"></i> <?php echo $HotelOwner->first_name ?> <?php echo $HotelOwner->last_name; ?></p>
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-car"></i> <?php echo $hotel->garages_number; ?> Garages</p>
								<p><i class="fa fa-clock-o"></i> <?php echo $hotel->date_modified; ?></p>
							</div>
							<div class="col-md-4">
								<p><i class="fa fa-bath"></i> <?php echo $hotel->bathrooms_number; ?> Bathrooms</p>
								<p><i class="fa fa-trophy"></i> <?php echo $hotel->stars; ?> Stars</p>
							</div>
						</div>
						<h3 class="sl-sp-title">Description</h3>
						<div class="description">
							<p><?php echo $hotel->description; ?></p>
						</div>
					</div>
					<!-- Rooms -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List of rooms</h6>
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
                      <th>Reserve</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
					  					<th>Price</th>
                      <th>Terrace</th>
                      <th>Kitchen</th>
                      <th>Room Type</th>
                      <th>Air Conditioner</th>
                      <th>Reserve</th>
                    </tr>
				  </tfoot>
				  <tbody>
					<?php if(isset($pictures)):?>
				  <?php foreach ($rooms as $row)
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
                      <td><button data-toggle="modal" data-target="#reservationModal" id="<?=$row->id?>" class="reserve btn btn-outline-primary"> Reserve</button></td>
                    </tr>
				  <?php } ?>
					<?php endif;?>
				  </tbody>
			</table>
        </div>
        </div>
      </div>
	  <!-- Rooms End-->
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar">
					<div class="author-card">
						<div class="author-img set-bg" data-setbg="<?=base_url()?>public/img/author1.jpg"></div>
						<div class="author-info">
							<h5><?php echo $HotelOwner->first_name ?> <?php echo $HotelOwner->last_name; ?></h5>
							<p>Hotel Owner</p>
						</div>
						<div class="author-contact">
							<p><i class="fa fa-phone"></i><?php echo $HotelOwner->phone ?> </p>
							<p><i class="fa fa-envelope"></i><?php echo $HotelOwner->email ?> </p>
						</div>
					</div>
					<div class="contact-form-card">
						<h5>Do you have any question?</h5>
						<?php echo form_open(base_url(). "send_question");?>
						<?php if(!isset($_SESSION['user_id'])):?>
							<input type="text" name="name" placeholder="Your name">
							<input type="text" name="email" placeholder="Your email">
						<?php else:?>
							<input type="text" name="name" value="<?=$_SESSION['first_name'] . $_SESSION['last_name']?>">
							<input type="text" name="email" value="<?=$_SESSION['email']?>">
						<?php endif;?>
							<textarea name="question" placeholder="Your question"></textarea>
							<button type="submit">SEND</button>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page end -->


	<!-- Reservation Modal -->
	<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
		<?php if(isset($_SESSION['user_id'])):?>
         <?php echo form_open('reservation'); ?>
        
            
            <div class="row">
                <div class="col-md-12 login-form-1">
                <button type="button" class="close close-modal-form" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    <h3 class="mt-4 mb-4">Reservation</h3>
					<?php if(isset($_SESSION['reservation_error'])):?>
                    <div id="reservation_error" class="alert alert-danger" role="alert">
                        <?php  echo $_SESSION['reservation_error'];?>
                    </div>
                    <?php endif; ?>
					<?php if(isset($_SESSION['reservation_success'])):?>
                    <div id="reservation_success" class="alert alert-success" role="alert">
                        <?php  echo $_SESSION['reservation_success'];?>
                    </div>
                    <?php endif; ?>
					<div class="modal-body">
                    <div class="form-group">
                        <input type="date"  name="from_date" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="date" name="to_date" class="form-control"/>
                    </div>
										<div class="form-group">
                        <input type="hidden" name="userid" value="<?=$_SESSION['user_id']?>"/>
						<input type="hidden" name="roomId" id="roomId" value="<?=$_SESSION['roomId']?>"/>
						<input type="hidden" name="hotelId" id="hotelId" value="<?php echo $hotel->id; ?>"/>
                    </div>
					<!-- TABLE -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Room Reservation</h6>
						</div>
						<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="reservedDates" width="100%" cellspacing="0">
							<thead>
								<tr>
								<th>From Date</th>
								<th>To Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								</tr>
							</tbody>
							</table>
						</div>
   					 </div>
					</div>
					
                    <div class="form-group text-align-center" >
                        <button type="submit" class="btnSubmit" >Reserve</button>
                    </div>
					</div>
                </div>
            </div>
			<?php else:?>
			<div class="row">
                <div class="col-md-12 login-form-1">
                <button type="button" class="close close-modal-form" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    <h3 class="mt-4 mb-4">Reservation</h3>
                    <div class="form-group">
                        Please Register or Login if you want to reserve room.
                    </div>
				</div>
			</div>
				  

			<?php endif; ?>
        </div>

        <?=form_close();?>
    </div>
  </div>

