<?php echo form_open(base_url()."filter/hotels"); ?> 
<div>
<div class="filter-search">
		<div class="search-container">
			<div class="filter-form">
				<input type="text"  name = 'search' id = 'search' placeholder="Enter a location, or Hotel Name">
				<button class="site-btn fs-submit" type = submit>SEARCH</button>
            </div>
		</div>
</div>
<?php form_close() ?>

<section class="feature-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Featured Listings</h3>
            <p>Browse houses and flats for sale and to rent in your area</p>
        </div>
        <div class="row">
            <?php
            foreach($allHotels as $row)
            {
            ?>
            <div class="col-lg-4 col-md-6">
                <!-- feature -->
                <div class="feature-item">
                    <div class="feature-pic set-bg" data-setbg="<?=base_url(), $row->picture?> ">
                        <div class="sale-notic">FOR RENT</div>
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5><?php echo $row->name; ?></h5>
                            <p><i class="fa fa-map-marker"></i> <?php echo $row->location; ?></p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> <?php echo $row->surface; ?> Square foot</p>
                                    <p><i class="fa fa-bed"></i> <?php echo $row->rooms_number; ?> Rooms</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-car"></i> <?php echo $row->garages_number; ?> Garages</p>
                                    <p><i class="fa fa-trophy"></i> <?php echo $row->stars; ?> Stars</p>
                                </div>	
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class="fa fa-clock-o"></i> <?php echo $row->date_modified; ?></p>
                                </div>	
                            </div>
                        </div>
                        <a href="<?=base_url();?>hotels/<?=$row->id;?>" class="room-price">More details</a>
                    </div>
                </div>
            </div>
            <?php  }  ?>
        </div>  
    </div>
</section>