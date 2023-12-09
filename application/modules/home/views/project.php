  <?php $bg = base_url('uploads/projects').'/'.$results->bg_image;?>
  <!-- style="background-image: url('<?php echo $bg;?>');"  -->
  <section class="property-details" >
    
	<div class="hero-slider slider">
		<?php if($project_sliders){ ?>
		<?php foreach($project_sliders as $slid){ ?>
		<div>
			<img src="<?php echo base_url(); ?>uploads/projects/<?php echo $slid->image ?>" class="img-fluid m-hide" alt=""/>
		</div>
		
		<?php } ?>
		<?php }else{ ?>
		<!--<div>
			<img src="<?php echo base_url(); ?>images/main-banner.webp" class="img-fluid m-hide" alt=""/>
		</div> -->
		<?php } ?>
		
	</div>
	
  </section>

<section class="rerawrap clearfix">
	<div class="container">
      <div class="property-con">
        <div class="row">
         <div class="col-12 col-md-4">
            <h3>RERA</h3>
            <ul class="list-group">
              <li><a href="#"><?php echo $results->rera_no?></a></li>
              <li><a href="#"><?php echo $results->project_title?></a></li>
              
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <ul class="list-group">
              <li><a href="#"><i class="fa-solid fa-house"></i><strong>Property size:</strong> <?php echo $results->property_size?></a></li>
              <?php if($results->category ==1){?>
			  <li><a href="#"><i class="fa-solid fa-star"></i><strong>Typology:</strong> <?php echo $results->typology?></a></li>
              <?php } ?>
			  <li><a href="#"><i class="fa-solid fa-location-arrow"></i><strong>Location:</strong> <?php echo $results->address?></a></li>
            </ul>
          </div>
           <div class="col-12 col-md-4">
            <ul class="list-group">
              <li><a href="#"><strong>Project status:</strong>
<?php 
$prStatus = $this->common_model->getsingle('project_status', array('id'=>$results->project_status));
?>
			  <?php echo $prStatus->project_status;?>
			  </a></li>
              <li><a href="#"><strong>Price:</strong>  <?php echo $results->price?></a></li>
              <li class="mt-3"><a data-bs-toggle="modal" data-bs-target="#callback"  href="javascript:void(0);" class="blue-button py-2 px-3">Request Call Back</a></li>
            </ul>
          </div>
          <div class="overlay">
            <div class="lavel-1">
              <h1 class="m-0 text-center"><?php echo $results->project_title?></h1>
            </div>
            <div class="lavel-2">
              <p class="m-0 text-center"><?php echo $results->payment_plan?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	

</section>


  <section class="overview">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-md-8">
          <div class="about_text">
            <div class="left-align small">
              <div class="brd">
                <span>overview</span>
                <h2><?php echo $results->project_title?></h2>
                <span><?php echo $results->address?></span>
              </div>
            </div>
            <p class="mt-4"><?php echo $results->project_description?>
            </p>
            <div class="mt-4">
				<a data-bs-toggle="modal" data-bs-target="#callback"  href="javascript:void(0);" class="blue-button py-2 px-3">Schedule Site Visit</a> 
				<a data-bs-toggle="modal" data-bs-target="#callback"  href="javascript:void(0);" class="blue-button py-2 px-3">Request E-Brochure</a>
			</div>
          </div>
        </div>
        <div class="col-md-4">
          <img src="<?php echo base_url('uploads/projects').'/'.$results->project_image;?>" class="img-fluid">
        </div>
      </div>
    </div>

  </section>





 
 
 <?php $retail_bg_image = base_url('uploads/projects').'/'.$results->retail_bg_image;?>
<section class="price-section" style="background-image: url('<?php echo $retail_bg_image;?>');">
  <div class="container">
    <div class="property-card text-white">
      <div class="row justify-content-center">
        
		<?php  if($project_retail){foreach($project_retail as $pr){ if($pr->pr_title || $pr->pr_price || $pr->pr_size 	){?>
        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center flex-column">
          <div class="card1 d-flex justify-content-start flex-column text-center">
            
            <div class="pp-price">
			<?php $cat =  $this->common_model->getsingle('categories', array('id'=>$results->category));?>
              <div class="card-header"><p class="m-0"><?php echo $pr->pr_title?></p></div>
              <h5 class="mt-4"><span>₹</span><?=$pr->pr_price?></h5>
             
            </div>
          </div>
          <div class="card2 d-flex justify-content-center flex-column text-center">
            <div class="pp-price1">
              <p>SUPER AREA</p>
              <h5><?=$pr->pr_size?></h5>
              <p>TYPE</p>
			  <?php $rt =  $this->common_model->getsingle('retail_type', array('id'=>$pr->pr_type));?>
              <h5 class="pb-2"><?=$rt->type?></h5>
            </div>
          </div>
        </div>
		<?php }  }} ?>
       
      </div>
    </div>
  </div>
</section>

 

  <section class="key-highight">
    <div class="container">
      
		<div class="main-title clearfix">
			<h2>Key highlights</h2>
			<p><?php echo $results->key_highlights_description?></p>
		</div>
		
		
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="hl-point">
<ul>
<?php 
$no = 1;
$kh1 = $this->db->query("SELECT * FROM `project_highlights` where project_id=$id limit 4")->result();?>
<?php  if($kh1){foreach($kh1 as $k=> $v1){?>
            <li><span class="chat-digit position-absolute top-0 translate-middle badge rounded-pill bg-danger">
              <?=$no; ?></span><?=$v1->ph_point?> </li>
<?php $no++; }} ?>
              <ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="highlight_middle">
            <div class="highlight_text">Highlights</div>
            <img src="<?php echo base_url('uploads/projects').'/'.$results->highlight_bg_image;?>">

          </div>
        </div>
        <div class="col-md-4">

          <div class="hl-point_left">
            <ul>
			<?php $kh2 = $this->db->query("SELECT * FROM `project_highlights` where project_id=$id limit 4 offset 4")->result();?>
<?php  if($kh2){foreach($kh2 as $j=> $v2){?>
                        <li> <span class="chat-digit_left position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                           <?=$no; ?></span><?=$v2->ph_point?></li>
                       <?php $no++; }} ?>       
                          <ul>
                      </div>
        </div>
      </div>
  
    </div>
  
  </section>

<section class="Aminities">
  <div class="container">
	<div class="main-title clearfix">
			<h2>Amenities</h2>
			<p><?php echo $results->amenties_description?></p>
		</div>
	  
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="amini_images">
          <img src="<?php echo base_url('uploads/projects').'/'.$results->amenties_bg_image;?>" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        
        <div class="amini-card">
          <div class="row">
		  <?php  if($project_amenties){foreach($project_amenties as $am){?>
          <div class="col-md-4 col-6">
            <div class="animi-icoan-card text-center">
             <?php if($am->pm_image){?>
			   <span><img src="<?php echo base_url('uploads/projects').'/'.$am->pm_image;?>" style="height: 40px;"></span>
			 <?php }else{?> 
              <span><i class="fa-solid fa-star"></i></span>
			  <?php }?>
              <h5><?=$am->pm_points?></h5>
            </div>
          </div>
		  <?php }} ?>

          
        </div>

       
      </div>
    </div>
  </div>

</section>

<section class="map-location bg-gray">
  <div class="container">
	<div class="main-title clearfix">
		<h2>Location Map</h2>
		<p><?php echo $results->location_map_description?></p>
	</div>  
    <div class="row">
      <div class="col-md-12">
        <div class="map-loc">
          <iframe src="<?php echo $results->location_map_url?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

</section>


<section class="overview ">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-4">
        <img src="<?php echo base_url('uploads/projects').'/'.$results->brochure_image;?>" class="img-fluid">
      </div>
      
      <div class="col-md-8">
        <div class="about_text">
          <div class="left-align small">
            <div class="brd">
              <span>Brochure</span>
              <h2><?php echo $results->brochure_title?></h2>
              <span></span>
            </div>
          </div>
          <p class="mt-4"><?php echo $results->brochure_description?>
          </p>
          <div class="mt-4"><a data-bs-toggle="modal" data-bs-target="#callback"  href="javascript:void(0);" class="blue-button py-2 px-3">Request E-Brochure</a></div>
        </div>
      </div>
      
    </div>
  </div>

</section>


<section class="overview bg-gray">
  <div class="container">
    <div class="row align-items-center g-5">
		<div class="col-md-8">
        <div class="about_text">
          <div class="left-align small">
            <div class="brd">
              <span><i>About Builder</i></span>
              <h2><?php echo $results->about_builder_title?></h2>
              <span></span>
            </div>
          </div>
          <p class="mt-4"><?php echo $results->about_builder_description?></p>
         
        </div>
      </div>
	 <div class="col-md-4">
        <img src="<?php echo base_url('uploads/projects').'/'.$results->about_builder_image;?>" class="img-fluid">
      </div>
      
      
      
    </div>
  </div>

</section>


<section class="featured-section" style="background-color:#fff;">
    <div class="container">
      <div class="row">
        <div class="col-12">
           
			
			<div class="main-title clearfix">
				<h2>Related Properties</h2>
				<p>Invest in our Most Recognized Commercial Properties and multiply your investment like never before.</p>
				
			</div>
			
        </div>
        <div class="col-12">
          <div class="featured-projects">
            
			<?php if($populars){ foreach($populars as $val){?>
			<div>
               <div class="featurewrap clearfix">
					<div class="thumb">
						<span class="location"><i class="ti-pin-alt"></i> <?php echo $val->address?></span>
						<a href="<?php echo base_url('home/project').'/'.$val->slug?>"><img src="<?php echo base_url('uploads/projects').'/'.$val->project_image?>" class="img-fluid" alt=""/></a>
						<?php $project_status = $this->common_model->getsingle('project_status', array('id'=>$val->project_status));?>
						<!--<a href="#" class="thmb_cntnt"><?=$project_status->project_status?></a> -->
					</div>
				  <div class="details clearfix">
					    <div class="tc_content clearfix">
						  <h4><a href="<?php echo base_url('home/project').'/'.$val->slug?>"><?php echo  substr ($val->project_title, 0, 22);?><?php if(strlen($val->project_title ) > 22){ echo "...";}?></a></h4>
						  
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
								<a href="<?php echo base_url('home/project').'/'.$val->slug?>" style="width:40%; padding:12px 10px; color:#fff; background-color:#CA353C; border-radius:5px; margin-top: 4px;">View Detail</a>
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
  


  <section class="cta-section">
    <div class="container">
         <div class="call-to-action-inner call-to-action-inner ltn__secondary-bg position-relative">
              <div class="coll-to-info text-color-white">
                <h1>Discover a World of Luxury Residential Properties in Noida.</h1>
                <p>At Red Brix, we are your trusted partners in the world of real estate. With over a decade of excellence, we bring you unparalleled service and expertise, making your property dreams a reality. Discover the future of real estate with us.</p>
              </div>
              <div class="btn-wrapper"><a class="btn btn-effect-3 btn-white"data-bs-toggle="modal" data-bs-target="#callback"  href="javascript:void(0);" >REQUEST A CALL BACK<i
                    class="icon-next"></i></a></div>
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


  
  
























