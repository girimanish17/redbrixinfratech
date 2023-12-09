 <section class="about-main d-flex align-items-center justify-content-center">
    <div class="inner-page-title">
      <h1>Career</h1>
      <p>find your future, join Us</p>
    </div>
  </section>

  <section class="contact-info bg-gray">
    <div class="container">
      <div class="col-12">
        <div class="page-title white">

          <h2>Job Opening</h2>

        </div>

      </div>

<?php if($results){ foreach($results as $val){ ?>
      <div class="row">
        <div class="col-md-12">
          <div class="job-content">
            <div class="row align-items-center">

              <div class="col-md-8">
                <div class="job-apply">
                  <h5><?php echo $val->job_type==1?"Full-Time":"Part-Time"?>, Day shift : <?php echo date('h:iA',strtotime($val->shift_start_time))?> - <?php echo date('h:iA',strtotime($val->	shift_end_time))?></h5>
                  <h6><?php echo $val->title?></h6>
                  <p><span class="text-gray">posted by</span> Redbrix</p>
                  <div class="position-icon">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="noof "><i class="fa-solid fa-user"></i><span class="text-gray">No. of
                            Position</span><span class="podigit"><?php echo $val->position_count?></span></div>
                      </div>
                      <div class="col-md-7">
                        <div class="poadd text-gray"><span><i class="fa-solid fa-location-dot"></i></span> <?php echo $val->location?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="applly-button">
                  <button type="button" class="btn btn-primary btn-bule" data-bs-toggle="modal" data-bs-target="#ApplyModal<?php echo $val->id?>">Apply</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
<?php } } ?>


<?php if($results){ foreach($results as $val){ ?>		
<!-- The Modal -->
<div class="modal applyModal" id="ApplyModal<?php echo $val->id?>" style="top:25%;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $val->title?> - Apply Now</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="mb-3">
			 <input type="text" placeholder="Full name" class="form-control">
		  </div>
		  <div class="mb-3">
			 <input type="text" placeholder="Email address" class="form-control">
		  </div>
		  <div class="mb-3">
			 <input type="text" placeholder="Phone number" class="form-control">
		  </div>
		  <div class="mb-3">
			 <input type="file" placeholder="Phone number" class="form-control">
		  </div>
		  <button type="submit" class="btn btn-submit">Submit</button>
      </div>


    </div>
  </div>
</div>		
<?php } } ?>
		
		
     
    </div>
  </section>















  <section class="cta-section">
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="call-to-action-inner call-to-action-inner ltn__secondary-bg position-relative">
              <div class="coll-to-info text-color-white">
                <h1>Ready to Discover? Dive into RedBrix Listings Now</h1>
                <p>Explore an array of residential, commercial, and plot options at RedBrix. Find your perfect space and make your property aspirations a reality.</p>
              </div>
              <div class="btn-wrapper"><a class="btn btn-effect-3 btn-white" data-bs-toggle="modal" data-bs-target="#callback"  href="javascript:void(0);">REQUEST A CALL BACK<i
                    class="icon-next"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
<div class="modal fade" id="callback">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Connect With Your Property Investment Expert Now</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="<?php echo base_url(); ?>home/thank_you" method="post">
			<div class="formConnect clearfix">

					<div class="form-group">
						<input type="text" name="full_name" class="form-control" placeholder="Full name* " required>
					</div>
					<div class="form-group">
						<input type="tel" name="contact" minlength="10" maxlength="10" class="form-control" placeholder="Phone*" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email*" required>
					</div>
					<div class="form-group">
						<input type="text" name="city"  class="form-control" placeholder="City*" required>
					</div>
					
					<button type="submit" class="btn btn-submit">Submit</button>
				 
				</div>
					</form>
      </div>
    </div>
  </div>
</div>
