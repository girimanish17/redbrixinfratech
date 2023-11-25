 <?php $category_id = $_GET['category_id']?>
 <?php $category = $rec = $this->common_model->getsingle('categories', array('id'=>$category_id));?>
 <?php 
 
 $bg = base_url('uploads/projects/'.$category->bg_image);
 if($category_id)
 {
	 $bg = base_url('uploads/projects/'.$category->bg_image);
 }else{
	 $bg = base_url('uploads/projects/pro-bg3.jpg');
 }
 ?>
<section class=" property-details p-5 text-white  d-flex align-items-center justify-content-center"style="background-image: url('<?php echo $bg;?>')!important;">
    <div class="container">
      <div class="property-con">
        <div class="row">
          <div class="col-12">
            <form action="<?php echo base_url(); ?>home/project_listing" method="get">
                <div class="row">
                  <div class="col-md-4">
				  <input class="form-control mb-3" name="location" value="<?php if($locationS){ echo $locationS; } ?>" placeholder="Location">
                   
                  </div>
                  <div class="col-md-4">
                    <select name="project_status_id" id="Loocking" class="form-control mb-3">
					<option value=''>Project Status</option>
                      <?php if($prStatus) { foreach($prStatus as $prs){ ?>
                                <option <?php if($project_status_id == $prs->id) { echo "selected"; } ?>  value="<?php echo $prs->id ?>"><?php echo $prs->project_status; ?></option>
                            <?php }} ?>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <select name="category_id" id="category_id" class="form-control mb-3">
                      <option value=''>Category</option>
                       <?php if($categories) { foreach($categories as $cat){ ?>
                                <option <?php if($category_id == $cat->id) { echo "selected"; } ?> value="<?php echo $cat->id ?>"><?php echo $cat->category; ?></option>
                            <?php }} ?>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-bule">Search</button>
                   <a href="<?php echo base_url(); ?>home/project_listing" class="btn btn-primary btn-bule">Reset</a>

                  </div>


                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="tab-section ProductListing">
    <div class="container">
 	  
	<div class="main-title clearfix">
		<h2><?php if($_GET['category_id']==1){ echo "Residential Projects";}
					elseif($_GET['category_id']==2){ echo "Commercial Projects";}
					elseif($_GET['category_id']==3){ echo "Plots";}
					?>
</h2>
		<p>Guaranteed some of the most popular Commercial Properties in Noida based on user reviews, ratings &amp; Popularity.</p>
	</div>

       <div class="row">
	   <?php// if($featured_listing) { foreach($featured_listing as $val) { 
            //$pro_status = $this->common_model->getsingle('project_status', array('id' => $fea_project->project_status));
        ?>	
              <!--<div class="col-md-4">
                <div class="product-item">

                  <div class="product-img">
                    <a href="<?php echo base_url(); ?>home/project/<?php echo $fea_project->slug; ?>" tabindex="-1"><img src="<?php echo base_url(); ?>uploads/projects/<?php echo $fea_project->project_image; ?>" alt="#"></a>
                    <div class="product-badge">
                      <ul>
                        <li class="sale-badge bg-green">Get Callback</li>
                      </ul>
                    </div>
                    <div class="product-img-location-gallery">
                      <div class="product-img-location">
                        <ul>
                          <li>
                            <a href="#" tabindex="-1"><i class="fa-solid fa-location-dot"></i> &nbsp; <?php echo $fea_project->address; ?></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-info">

                    <h2 class="product-title"><a href="<?php echo base_url(); ?>home/project/<?php echo $fea_project->slug; ?>" tabindex="-1"><?php echo substr ($fea_project->project_title, 0, 200); ?></a></h2>
							
                    <ul class="prop_details">
                     
					    <li class="list-inline-item notlong">&#x2022; <?=$fea_project->project_type?></li>
						<li class="list-inline-item notlong">&#x2022; <?=$fea_project->rera_no?></li>
						<li class="list-inline-item notlong">&#x2022; <?=$fea_project->payment_plan?></li>
						<li class="list-inline-item notlong">&#x2022; <?=$fea_project->price?></li>
                    </ul>
                  </div>



                </div>
	   </div>-->
	    <div class="col-12">
          <div class="featured-projects">
            
			<?php if($featured_listing){ foreach($featured_listing as $val){?>
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
						  <h4><a href="<?php echo base_url('home/project').'/'.$val->slug?>"><?php echo  $val->project_title ; ?></a></h4>
						
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
								<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#enquirePopup<?php echo $val->id?>" style="width:42%; padding:12px 10px; color:#fff; background-color:#1E3C5C; border-radius:5px; margin-top: 4px;">Enquire Us</a>
						  </div>
						</div>
				  </div>
					
				</div>
            </div>
			
           <?php } } ?>
           
          </div>
        </div>
	   
	   <?php //}} ?>

              
<!--
              <div class="col-md-4">
                <div class="product-item">

                  <div class="product-img">
                    <a href="#" tabindex="-1"><img src="images/5.jpg" alt="#"></a>
                    <div class="product-badge">
                      <ul>
                        <li class="sale-badge bg-green">Get Callback</li>
                      </ul>
                    </div>
                    <div class="product-img-location-gallery">
                      <div class="product-img-location">
                        <ul>
                          <li>
                            <a href="#" tabindex="-1"><i class="fa-solid fa-location-dot"></i> &nbsp; North Nashchester,
                              USA</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="-1">Uma Nilyam, Ramnagar, varanasi</a></h2>

                    <ul class="product-short-info product-short-info-before">
                      <li><span>3 <i class="fa-solid fa-bed"></i></span>
                        Bedrooms
                      </li>
                      <li><span>2 <i class="fa-solid fa-bath"></i></span>
                        Bathrooms
                      </li>
                      <li><span>3450 <i class="fa-solid fa-vector-square"></i></span>
                        square Ft
                      </li>
                    </ul>
                  </div>



                </div>
              </div>

-->              



            </div>

    </div>

  </section>
</br>  
  <section class="text-content_a">
    <div class="container">
      <div class="trxt-contborder">
            <h3>
             Discover a World of Luxury Residential Properties in Noida.</h3>
            <p>Investment in real estate is tricky as it requires deep knowledge and the right skill to select the right
              properties. When it comes to buying residential and commercial properties, it is always beneficial to get
              in touch with a knowledgeable and expert consultant who can guide you through the residential and
              commercial properties for sale process and</p>
          </div>
    </div>

  </section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php if($featured_listing){ foreach($featured_listing as $val){?>  	
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
						<input type="text" name="city" class="form-control" placeholder="City*" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email*" required>
					</div>
					<div class="form-group">
						<input type="tel" name="contact" minlength="10" maxlength="10" class="form-control" placeholder="Phone*" required>
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


































<section class="cta-section">
    <div class="container">
         <div class="call-to-action-inner call-to-action-inner ltn__secondary-bg position-relative">
              <div class="coll-to-info text-color-white">
                <h1>Ready to Discover? Dive into Redbrix Listings Now</h1>
                <p>Explore an array of residential, commercial, and plot options at Redbrix. Find your perfect space and make your property aspirations a reality.</p>
              </div>
              <div class="btn-wrapper"><a class="btn btn-effect-3 btn-white" data-bs-toggle="modal" data-bs-target="#callback"  href="javascript:void(0);">REQUEST A CALL BACK<i
                    class="icon-next"></i></a></div>
            </div>
      </div>
  </section>




