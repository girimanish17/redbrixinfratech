<section class="about-main d-flex align-items-center justify-content-center">
    <div class="inner-page-title">
      <h1> Contact Us</h1>
    </div>
  </section>

<section class="contact-info">
  <div class="container">
  <div class="col-12">
    <div class="page-title">
      
      <h2>Contact Info</h2>
   
    </div>
  
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="contact-card text-center">
        <span><i class="fa-solid fa-city"></i></span>
        <h5>Head Office</h5>
        <p>C-84, First Floor, Sector-2, Noida, U.P-201301</p>
       
      </div>

    </div>
    <div class="col-md-4">
      <div class="contact-card text-center">
        <span><i class="fa-solid fa-mobile-screen-button"></i></span>
        <h5>Phone</h5>
        <p>9818457218/0120-4561836</p>
       
      </div>

    </div>


    <div class="col-md-4">
      <div class="contact-card text-center">
        <span><i class="fa-solid fa-envelope-open-text"></i></span>
        <h5>Email</h5>
        <p>info@redbrixinfratech.com </p> <!--, residential@redbrixinfratech.com , plot@redbrixinfratech.com -->
       
      </div>

    </div>

    
  </div>
</div>
</section>
 
<section class="get-in-touch"

>
  <div class="container">
    <div class="col-12">
      <div class="page-title">
       
        <h2>Get-in-touch</h2>
      

 
      </div>
    
    </div>

    <div class="row">
	
      <div class="col-md-4">
        <img src="<?php echo base_url('')?>assets/asset2/images/cont.png" class="img-fluid">
      </div>
      <div class="align-items-center col-md-8 d-inline-grid">
        <div class="touch-form">
		 <?php if($this->session->userdata('msg')) { ?> 
		 <div style="color:#2da82d;padding-left: 5px;">
		 <?php echo $this->session->flashdata('msg');?> 
		 </div>
		 <?php }  ?>
		 <?php if($this->session->userdata('msgError')) { ?> 
		 <div style="color:red;padding-left: 5px;">
		 <?php echo $this->session->flashdata('msgError');?> 
		 </div>
		 <?php }  ?>
          <form <?php echo base_url('admin/contactus'); ?> method="post">
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control mb-3" name="name" value="<?php echo set_value('name'); ?>" placeholder="Your name" aria-label="Your name">
					<span style="color:red;"> <?php echo form_error('name'); ?></span>
			 </div>
              <div class="col-md-6">
                <input type="email" class="form-control mb-3" name="email" value="<?php echo set_value('email'); ?>" placeholder="your Email id" aria-label="your Email id">
					<span style="color:red;"> <?php echo form_error('email'); ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="tel"  pattern="[1-9]{1}[0-9]{9}" class="form-control mb-3" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Your phone">
              </div>
			  	<span style="color:red;"> <?php echo form_error('phone'); ?></span>
            </div>

            <div class="row">
			<div class="col-md-6">
                <input type="text" class="form-control mb-3" name="location" placeholder="Your location" value="<?php echo set_value('location'); ?>" aria-label="Your location">
					<span style="color:red;"> <?php echo form_error('location'); ?></span>
              </div>
              <!--<div class="col-md-6">
                <select name="location" id="location" class="form-control mb-3">
                  <option value="noaida">select Location</option>
                  <option value="noaida">Noida</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Delhi">Delhi</option>
                  </select>
                      </div>-->
                      <div class="col-md-6">
                        <select name="category" id="Loocking" class="form-control mb-3">
                          <option value="noaida">Category</option>
                          <?php if($categories) { foreach($categories as $cat){ ?>
                                <option <?php if($category_id == $cat->id) { echo "selected"; } ?> value="<?php echo $cat->id ?>"><?php echo $cat->category; ?></option>
                            <?php }} ?>
                        </select>
							<span style="color:red;"> <?php echo form_error('category'); ?></span>
                             </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-floating">
                  <textarea class="form-control mb-3" name="comment" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                  	<span style="color:red;"> <?php echo form_error('comment'); ?></span>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-bule">Submit</button>
                </div>
              </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</section> 

<section class="map-location">
  <div class="container">
    <div class="row">
      <div class="page-title small">
        <h2>Location Map</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="map-loc">
          <iframe src="https://maps.google.com/maps?q=redbrix+infratech&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

</section>
  

  


  

  



   <section class="cta-section">
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="call-to-action-inner call-to-action-inner ltn__secondary-bg position-relative">
              <div class="coll-to-info text-color-white">
                <h1>Ready to Discover? Dive into Redbrix Listings Now</h1>
                <p>Explore an array of residential, commercial, and plot options at Redbrix. Find your perfect space and make your property aspirations a reality.</p>
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


