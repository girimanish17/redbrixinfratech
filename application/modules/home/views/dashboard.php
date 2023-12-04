  <!-- ***** Header Area End ***** -->

  <section class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">

            <h2>Discover the Perfect Range of <span class="typed-text"></span><span class="cursor">&nbsp;</span></h2>
          </div>
			
        </div>
        <div class="col-lg-12">
          <form id="search-form" name="gs"  method="get" role="search" action="<?php echo base_url(); ?>project_listing">
            <div class="row">
              <div class="col-lg-9 align-self-center">
                <fieldset>
                  <input type="address" name="location" class="searchText"
                    placeholder="Search by Location, Project" >
                </fieldset>
              </div>

              <div class="col-lg-3">
                <fieldset>
                  <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>

      </div>
      <div class="row justify-content-center mt-5 mt-md-3">
        <div class="col-lg-8 text-center">
          <a class="btn btn-primary btn-brown" href="<?php echo base_url(); ?>project_listing?location=&category_id=1&project_status_id=">Residential</a>
          <a class="btn btn-primary btn-brown "href="<?php echo base_url(); ?>project_listing?location=&category_id=2&project_status_id=">Commercial</a>
          <a class="btn btn-primary btn-brown" href="<?php echo base_url(); ?>project_listing?location=&category_id=3&project_status_id=">Plots</a>
         
        </div>

      </div>
    </div>

    <div class="counter-box">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="counter">
            <h2><span class="count" data-value="11">11</span></h2>
            <p>Years of Excellence</p>
          </div>
        </div>
		<div class="col-md-3">
          <div class="counter">
            <h2><span class="count"data-value="150">150</span></h2>
            <p>+ Property experts</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="counter">
            <h2><span class="count" data-value="100">100</span></h2>
            <p>+ Leading Developers</p>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="counter">
            <h2><span class="count" data-value="10000">10000</span></h2>
            <p>+ Happy Customers</p>
          </div>
        </div>
        
      </div>
    </div>


  </section>
  
  <section class="projects-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          
			<div class="main-title clearfix">
				<h2>Projects</h2>
				<p>Discover an array of exceptional projects at Redbrix. From luxurious residential properties that redefine comfort to dynamic commercial spaces designed for success, and promising land plots brimming with potential. Whether you're searching for a dream home, a strategic business location, or an investment opportunity, our carefully curated listings cater to your every real estate aspiration. Explore our projects and embark on a journey to find your perfect property.</p>
			</div>
        </div>
      </div>
      <div class="row">
	  
	  <?php $Residentialcategory = $rec = $this->common_model->getsingle('categories', array('id'=>1));?>
	  <?php $commercialcategory = $rec = $this->common_model->getsingle('categories', array('id'=>2));?>
	  <?php $plotscategory = $rec = $this->common_model->getsingle('categories', array('id'=>3));?>
        <div class="col-md-4 shadowcard position-relative">
          <div class="project-card">
            <img src="<?php echo base_url()?>uploads/projects/<?=$Residentialcategory->main_image?>" alt="">
            <div class="location-content-wrap">
              <div class="location-content">
                <h5><a href="<?php echo base_url(); ?>project_listing?location=&category_id=1&project_status_id=">Residential</a></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 shadowcard position-relative">
          <div class="project-card">
            <img src="<?php echo base_url()?>uploads/projects/<?=$commercialcategory->main_image?>" alt="">
            <div class="location-content-wrap">
              <div class="location-content">
                <h5><a href="<?php echo base_url(); ?>project_listing?location=&category_id=2&project_status_id=">Commercial</a></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 shadowcard position-relative">
          <div class="project-card">
            <img src="<?php echo base_url()?>uploads/projects/<?=$plotscategory->main_image?>" alt="">
            <div class="location-content-wrap">
              <div class="location-content">
                <h5><a href="<?php echo base_url(); ?>project_listing?location=&category_id=3&project_status_id=">Plots</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  
  <section class="featured-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
           
			
			<div class="main-title clearfix">
				<h2>Featured Projects</h2>
				<p>Introducing our featured listings, a curated showcase of top-notch properties. From stunning residential gems designed for the discerning homeowner, to prime commercial spaces at the heart of business districts, and coveted land plots in high-growth areas. These standout listings represent the cream of the real estate crop, offering you the chance to own, invest, or build your dreams. Explore our featured listings and elevate your real estate experience today.</p>
				
			</div>
			
        </div>
        <div class="col-12">
          <div class="featured-projects">
            
			<?php if($featured_project){ foreach($featured_project as $val){?>
			<div>
               <div class="featurewrap clearfix">
					<div class="thumb">
						<span class="location"><i class="ti-pin-alt"></i> <?php echo $val->address?></span>
						<a href="<?php echo base_url('project').'/'.$val->slug?>"><img src="<?php echo base_url('uploads/projects').'/'.$val->project_image?>" class="img-fluid" alt=""/></a>
						<?php $project_status = $this->common_model->getsingle('project_status', array('id'=>$val->project_status));?>
						<!-- <a href="#" class="thmb_cntnt"><?=$project_status->project_status?></a> -->
					</div>
				  <div class="details clearfix">
					    <div class="tc_content clearfix">
						  <h4><a href="<?php echo base_url('project').'/'.$val->slug?>"><?php echo $val->project_title?></a></h4>
						
						  <ul class="prop_details mb0">
								<li class="list-inline-item notlong"> <?=$val->project_type?></li>
								<li class="list-inline-item notlong"> <?=$val->rera_no?></li>
								<li class="list-inline-item notlong"> <?=$val->payment_plan?></li>
								<li class="list-inline-item notlong"> <?=$val->price?></li>
								<li class="list-inline-item notlong"> <?=$project_status->project_status?></li>
							</ul>
						</div>
					<div class="fp_footer">							
							<div class="fp_meta mb0 text-center">
								<a href="<?php echo base_url('project').'/'.$val->slug?>" style="width:40%; padding:12px 10px; color:#fff; background-color:#CA353C; border-radius:5px; margin-top: 4px;">View Detail</a>
								<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#enquirePopup<?php echo $val->id?>" style="width:42%; padding:12px 10px; color:#fff; background-color:#1E3C5C; border-radius:5px; margin-top: 4px;">Enquire Us</a>
						  </div>
						</div>
				  </div>
					
				</div>
            </div>
			
           <?php } } ?>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="featured-section" style="background-color: #fff;">
    <div class="container">
      <div class="row">
        <div class="col-12">
           
			
			<div class="main-title clearfix">
				<h2>Popular Projects</h2>
				<p>For investors considering rental income, our popular project's listing offers a lucrative opportunity. The prime location, coupled with the project's high-quality construction and desirable amenities, positions it as an attractive choice among the investors. The potential for competitive rental yields adds another layer of financial benefit.</p>
				
			</div>
			
        </div>
        <div class="col-12">
          <div class="featured-projects">
            
			<?php if($populars){ foreach($populars as $val){?>
			<div>
               <div class="featurewrap clearfix">
					<div class="thumb">
						<span class="location"><i class="ti-pin-alt"></i> <?php echo $val->address?></span>
						<a href="<?php echo base_url('project').'/'.$val->slug?>"><img src="<?php echo base_url('uploads/projects').'/'.$val->project_image?>" class="img-fluid" alt=""/></a>
						<?php $project_status = $this->common_model->getsingle('project_status', array('id'=>$val->project_status));?>
						<!-- <a href="#" class="thmb_cntnt"><?=$project_status->project_status?></a> -->
					</div>
				  <div class="details clearfix">
					    <div class="tc_content clearfix">
						  <h4><a href="<?php echo base_url('project').'/'.$val->slug?>"><?php echo $val->project_title?></a></h4>
						  
						  <ul class="prop_details mb0">
								<li class="list-inline-item notlong"> <?=$val->project_type?></li>
								<li class="list-inline-item notlong"> <?=$val->rera_no?></li>
								<li class="list-inline-item notlong"> <?=$val->payment_plan?></li>
								<li class="list-inline-item notlong"> <?=$val->price?></li>
								<li class="list-inline-item notlong"> <?=$project_status->project_status?></li>
							</ul>
						</div>
					<div class="fp_footer">							
							<div class="fp_meta mb0 text-center">
								<a href="<?php echo base_url('project').'/'.$val->slug?>" style="width:40%; padding:12px 10px; color:#fff; background-color:#CA353C; border-radius:5px; margin-top: 4px;">View Detail</a>
								<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#enquirePopup_pop<?php echo $val->id?>" style="width:42%; padding:12px 10px; color:#fff; background-color:#1E3C5C; border-radius:5px; margin-top: 4px;">Enquire Us</a>
						  </div>
						</div>
				  </div>
					
				</div>
            </div>
			
           <?php } } ?>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  
  


  <section class="partner-section featured-section">
    <div class="container">
       
		<div class="main-title clearfix">
				<h2>Our Partners</h2>
				<p>Check out the top property spaces in Noida and choose the best one to grow your investment.</p>
			</div>
		
      <div class="row">
        <div class="col-12">
          <div class="our-partners">
            <div>
              <div class="op-logo">
                <img src="<?php echo base_url()?>assets/asset2/images/p1.png" alt="">
              </div>
            </div>
            <div>
              <div class="op-logo">
                <img src="<?php echo base_url()?>assets/asset2/images/p2.png" alt="">
              </div>
            </div>
            <div>
              <div class="op-logo">
                <img src="<?php echo base_url()?>assets/asset2/images/p3.png" alt="">
              </div>
            </div>
			<div>
              <div class="op-logo">
                <img src="<?php echo base_url()?>assets/asset2/images/p4.png" alt="">
              </div>
            </div>
			<div>
              <div class="op-logo">
                <img src="<?php echo base_url()?>assets/asset2/images/p5.png" alt="">
              </div>
            </div>
			<div>
              <div class="op-logo">
                <img src="<?php echo base_url()?>assets/asset2/images/p6.png" alt="">
              </div>
            </div>
			<div>
              <div class="op-logo">
                <img src="<?php echo base_url()?>assets/asset2/images/p7.png" alt="">
              </div>
            </div>
			<div>
              <div class="op-logo">
                <img src="<?php echo base_url()?>assets/asset2/images/p8.png" alt="">
              </div>
            </div>
            

          </div>
        </div>
      </div>
    </div>
  </section>
  
	<section class="blog-section">
    <div class="container">
       
		<div class="main-title clearfix">
				<h2>Latest Insights</h2>
				<p>Stay informed and inspired with our latest news and blogs. Dive into the world of real estate trends, market insights, and expert tips that empower your property decisions.</p>
			</div>
      <div class="blog-list">
        <div class="row">
		<?php if($blogs){ foreach($blogs as $bg){?>
          <div class="col-md-4">
            <div class="blog-item">
              <div class="entry-header">
                <div class="post-thumb">
                  <div class="post-thumb-inner">
                    <div class="thumb">
                     <a href="<?php echo base_url('blog_listing/'.$bg->id);?>"> <img decoding="async" loading="lazy" src="<?php echo base_url('uploads/blogs/')?>/<?=$bg->image?>" alt="#"></a>
                    </div>
                  </div>
                </div>
                <div class="post-single-meta">
                  <a href="#" rel="bookmark"><time class="entry-date"><span class="day"><?=date('d',strtotime($bg->date))?></span> <span
                        class="month"><?=date('F',strtotime($bg->date))?></span><span class="year">, <?=date('Y',strtotime($bg->date))?></span></time></a>
                </div>
              </div>
              <div class="entry-content">

                <div class="title-holder">
                  <h4 class="entry-title"><a href="<?php echo base_url('blog_listing/'.$bg->id);?>" rel="bookmark"><?php echo  substr ($bg->title, 0, 50);?>...</a></h4>
                </div>
                <div class="post-excerpt">
                  <div class="mascot-post-excerpt"><?php //echo  substr ($bg->description, 0, 500);?></div>
                </div>
              </div><a href="<?php echo base_url('blog_listing/'.$bg->id);?>" class="read-more">Learn more <i class="fa-solid fa-arrow-right-long"></i></a>
              <div class="clearfix"></div>

            </div>
          </div>
		<?php } } ?>
          
          
        </div>
      </div>
    </div>
  </section>
  
	<section class="review-section">
    <div class="container">
      
		<div class="main-title clearfix">
				<h2>Customer Feedback</h2>
				<p>Behind every successful real estate story is a satisfied client. Dive into our customer feedback section to read firsthand accounts of seamless transactions, expert guidance, and the joy of finding the right property. Your story could be next!</p>
			</div>
		
      <div class="row">
        <div class="col-12">
          <div class="review-slider">
            <div>
              <div class="testimonial-wrap">
                <!--<div class="testimonial-title">Alukas is my favourite store</div> -->
                <div class="testimonial-description"> </br>
                  We are so grateful for Redbrix Infratech in helping us find our dream home. Their expertise and attention to detail made the entire process smooth and stress-free. We couldn't be happier with our new home! </div>
                <div class="testimonial-meta">
                  <div class="testimonial-name">- Ritika Jain</div>
                  <div class="testimonial-rating woocommerce">
                    <div class="star-rating">
                      <span style="width:100%">
                        <div class="testimonial-rating woocommerce">

                        </div>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div>
              <div class="testimonial-wrap">
                <!--<div class="testimonial-title">Alukas is my favourite store</div>-->
                <div class="testimonial-description">
                  Our experience with Redbrix in purchasing a luxury property in Noida was exceptional. Their discretion, negotiation skills, and understanding of the luxury market were instrumental in securing our dream home. Truly top-notch service!</div>
                <div class="testimonial-meta">
                  <div class="testimonial-name">- Sachin Bansal</div>
                  <div class="testimonial-rating woocommerce">
                    <div class="star-rating">
                      <span style="width:100%"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="testimonial-wrap">
                <!--<div class="testimonial-title">Alukas is my favourite store</div> -->
                <div class="testimonial-description">
                  Securing the right commercial space for our business was crucial. Redbrix not only found us the perfect location but also negotiated terms that were favorable for our growth. Their expertise in commercial real estate is unmatched.</div>
                <div class="testimonial-meta">
                  <div class="testimonial-name">- Abhiraj Shukla</div>
                  <div class="testimonial-rating woocommerce">
                    <div class="star-rating">
                      <span style="width:100%"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="testimonial-wrap">
                <!--<div class="testimonial-title">Alukas is my favourite store</div>-->
                <div class="testimonial-description">
                  Working with Redbrix has been a game-changer for our real estate investments. Their understandings of market trends and keen eye for profitable opportunities have significantly boosted our portfolio. Highly recommend their services!</div>
                <div class="testimonial-meta">
                  <div class="testimonial-name">- Vishnu Agarwal</div>
                  <div class="testimonial-rating woocommerce">
                    <div class="star-rating">
                      <span style="width:100%">
                        <div class="testimonial-rating woocommerce">
                          <div class="star-rating">
                            <span style="width:80%"></span>
                          </div>
                        </div>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container">
         <div class="call-to-action-inner call-to-action-inner ltn__secondary-bg position-relative">
              <div class="coll-to-info text-color-white">
                <h1>Ready to Discover? Dive into Redbrix Listings Now</h1>
                <p>Explore an array of residential, commercial, and plot options at Redbrix. Find your perfect space and make your property aspirations a reality.</p>
              </div>
              <div class="btn-wrapper"><a class="btn btn-effect-3 btn-white" data-bs-toggle="modal" data-bs-target="#callback"  href="javascript:void(0);">Connect with Our Real Estate Expert Now!<i
                    class="icon-next"></i></a></div>
            </div>
      </div>
  </section>
  
<?php if($featured_project){ foreach($featured_project as $val){?>  	
	<!-- The Modal -->
<div class="modal fade" id="enquirePopup<?php echo $val->id; ?>">
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

			<input type="hidden" name="project_id" value="<?php echo $val->id; ?>">

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
<?php } } ?>

<?php if($populars){ foreach($populars as $val){?>  	
	<!-- The Modal -->
<div class="modal fade" id="enquirePopup_pop<?php echo $val->id; ?>">
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

			<input type="hidden" name="project_id" value="<?php echo $val->id; ?>">

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
<?php } } ?>


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
  
  

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$( document ).ready(function() {
 $('.count').each(function () {
    $(this).prop('Counter', 0).animate({
            Counter: $(this).data('value')
        }, {
        duration: 1000,
        easing: 'swing',
        step: function (now) {                      
            $(this).text(Math.ceil(now));
        }
    });
});
});

</script>