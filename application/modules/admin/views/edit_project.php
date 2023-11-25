<div class="">

	  <div class="page-title">
		<div class="title_left">
		  <h3>Edit Project</h3>
		</div>
		
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		  <div class="x_panel">
			
			<div class="x_content">
			  <br />
			  <form  class="form-horizontal form-label-left" method="post" autocomplete="off" action="<?php echo base_url('admin/edit_project/'.$project->id); ?>" enctype="multipart/form-data">

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  	<select class="form-control col-md-7 col-xs-12 <?php if(form_error('category')){ echo "parsley-error"; } ?>" id="category" name="category" onchange="selectcat(this.val);">
						<option value="">Select Category</option>
						<?php if($category) { foreach($category as $row){  ?>
							<option <?php if($project->category == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->category; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('category'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Title <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="title" name="project_title" value="<?php echo $project->project_title; ?>" placeholder="Add Project Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('project_title')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('project_title'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Status <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control col-md-7 col-xs-12 <?php if(form_error('project_status')){ echo "parsley-error"; } ?>" id="project_status" name="project_status">
						<option value="">Select Project Status</option>
						<?php if($project_status) { foreach($project_status as $row){  ?>
							<option <?php if($project->project_status == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->project_status; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('project_status'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Type <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="project_type" name="project_type" value="<?php echo $project->project_type; ?>" placeholder="Add Project Type" class="form-control col-md-7 col-xs-12 <?php if(form_error('project_type')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('project_type'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Price <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="price" name="price" value="<?php echo $project->price; ?>" placeholder="Add Project Price" class="form-control col-md-7 col-xs-12 <?php if(form_error('price')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('price'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Payment Plan <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="payment_plan" name="payment_plan" value="<?php echo $project->payment_plan; ?>" placeholder="Add Payment Plan" class="form-control col-md-7 col-xs-12 <?php if(form_error('payment_plan')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('payment_plan'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Rera Number <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="rera_no" name="rera_no" value="<?php echo $project->rera_no; ?>" placeholder="Add Rera Number" class="form-control col-md-7 col-xs-12 <?php if(form_error('rera_no')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('rera_no'); ?></span>
				  </div>				  
				</div>
				
				<div class="form-group" id="bedroom_div" style="<?php if($project->category == '2' OR set_value('category') == '2') { echo 'display:none';} ?>;">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Property Bedroom
				  </label>
				 		<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="property_bedroom" name="property_bedroom" value="<?php echo $project->property_bedroom; ?>" placeholder="Add property bedroom" class="form-control col-md-7 col-xs-12 <?php if(form_error('property_bedroom')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('property_bedroom'); ?></span>
				  </div>			  
				</div>
				
				<div class="form-group" id="bathroom_div" style="<?php if($project->category == '2' OR set_value('category') == '2') { echo 'display:none';} ?>;">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Property Bathroom 
				  </label>
				   <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="property_bathroom" name="property_bathroom" value="<?php echo $project->property_bathroom; ?>" placeholder="Add property bathroom" class="form-control col-md-7 col-xs-12 <?php if(form_error('property_bathroom')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('property_bathroom'); ?></span>
				  </div>
				  			  
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Property Size <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="property_size" name="property_size" value="<?php echo $project->property_size; ?>" placeholder="Add property size" class="form-control col-md-7 col-xs-12 <?php if(form_error('property_size')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('property_size'); ?></span>
				  </div>				  
				</div>
				
				<div class="form-group" id="typology_div" style="<?php if($project->category == '2' OR set_value('category') == '2') { echo 'display:none';} ?>;">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Typology<span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="typology" name="typology" value="<?php echo $project->typology; ?>" placeholder="Add typology" class="form-control col-md-7 col-xs-12 <?php if(form_error('typology')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('typology'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Location <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="address" name="address" value="<?php echo $project->address; ?>" placeholder="Add Address" class="form-control col-md-7 col-xs-12 <?php if(form_error('address')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('address'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Description <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<textarea id="project_short_description" autocomplete="off" placeholder="Add Project short Description" class="form-control <?php if(form_error('project_short_description')){ echo "parsley-error"; } ?>" name="project_short_description" ><?php echo $project->project_short_description; ?></textarea>
					<span style="color:red;"> <?php echo form_error('project_short_description'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Long Description <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<textarea id="project_description" autocomplete="off" placeholder="Add Project long Description" class="form-control <?php if(form_error('project_description')){ echo "parsley-error"; } ?>" name="project_description" ><?php echo $project->project_description; ?></textarea>
					<span style="color:red;"> <?php echo form_error('project_description'); ?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Backgound Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="bg_image" value="" class="form-control col-md-7 col-xs-12 ">
					<img src="<?php echo base_url('uploads/projects/'.$project->bg_image);?>" height="50px" width="70px">
					<span style="color:red;"> <?php echo form_error('bg_image'); ?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="project_image" value="" class="form-control col-md-7 col-xs-12 ">
					<img src="<?php echo base_url('uploads/projects/'.$project->project_image);?>" height="50px" width="70px">
					<span style="color:red;"> <?php echo form_error('project_image'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Featured Listings <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="checkbox" id="featured_listing" name="featured_listing" value="1" <?php if($project->featured_listing == '1'){ echo "checked";}?> style="margin-top:11px;">
				  </div>				  
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Popular Projects <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="checkbox" id="popular" name="popular" value="1" <?php if($project->popular == '1'){ echo "checked";}?> style="margin-top:11px;"> 
				  </div>				  
				</div>
				
				<hr>
				<?php for ($k = 0 ; $k < 4; $k++){ ?>
				<h3>Retail <?=$k+1?></h3>
				<input type="hidden" autocomplete="off" name="pr_id<?php echo $k+1?>" value="<?php echo $project_retail[$k]->id; ?>">
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail <?php echo $k+1?> Title 
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <?php //print_r($retail_type);?>
					<input type="text" autocomplete="off" id="pr_title<?php echo $k+1?>" name="pr_title<?php echo $k+1?>" value="<?php echo $project_retail[$k]->pr_title; ?>" placeholder="Add Retail Title" class="form-control col-md-7 col-xs-12">
					<span style="color:red;"> <?php echo form_error('pr_title1'); ?></span>
				  </div>				  
				</div>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail <?php echo $k+1?> Size
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_size<?php echo $k+1?>" name="pr_size<?php echo $k+1?>" value="<?php echo $project_retail[$k]->pr_size; ?>" placeholder="Add Retail Size" class="form-control col-md-7 col-xs-12 ">
					<span style="color:red;"> <?php echo form_error('pr_size1'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail <?php echo $k+1?> Price
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_price<?php echo $k+1?>" name="pr_price<?php echo $k+1?>" value="<?php echo $project_retail[$k]->pr_price; ?>" placeholder="Add Retail Price" class="form-control col-md-7 col-xs-12">
					<span style="color:red;"> <?php echo form_error('pr_price1'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 1 Type
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<select class="form-control col-md-7 col-xs-12" id="pr_type<?php echo $k+1?>" name="pr_type<?php echo $k+1?>">
						<option value="">Select Type</option>
						<?php if($retail_type) { foreach($retail_type as $row1){  ?>
							<option <?php if($project_retail[$k]->pr_type == $row1->id) { echo 'selected'; } ?> value="<?php echo $row1->id; ?>"><?php echo $row1->type; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('pr_type1'); ?></span>
				  </div>				  
				</div>
				<?php } ?>
				<hr>
				<h3>Backgound</h3>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="retail_bg_image" value="" class="form-control col-md-7 col-xs-12 ">
					<img src="<?php echo base_url('uploads/projects/'.$project->retail_bg_image);?>" height="50px" width="70px">
					<span style="color:red;"> <?php echo form_error('retail_bg_image'); ?></span>
				  </div>
				</div>
				
				<hr>
				<h3>Project Key Highlights</h3>
				
				<?php for ($j = 0 ; $j < 7; $j++){ ?>
				<input type="hidden" autocomplete="off" name="ph_id<?php echo $j+1?>" value="<?php echo $project_highlights[$j]->id; ?>">
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Key Highlights <?php echo $j+1; ?> 
				  </label>
				  
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="ph_point1" name="ph_point<?php echo $j+1; ?>" value="<?php echo $project_highlights[$j]->ph_point; ?>" placeholder="Add Point 1" class="form-control col-md-7 col-xs-12 <?php if(form_error('ph_point[]')){ echo "parsley-error"; } ?>">
				  </div>				  
				</div>
				
				<?php } ?>
				
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Key Highlights Description
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<textarea id="key_highlights_description" autocomplete="off" placeholder="Add Key Highlights Description" class="form-control <?php if(form_error('key_highlights_description')){ echo "parsley-error"; } ?>" name="key_highlights_description" ><?php echo $project->key_highlights_description; ?></textarea>
					<span style="color:red;"> <?php echo form_error('key_highlights_description'); ?></span>
				  </div>
				</div>
				
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Key Highlights Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="highlight_bg_image" value="" class="form-control col-md-7 col-xs-12 ">
					<img src="<?php echo base_url('uploads/projects/'.$project->highlight_bg_image);?>" height="50px" width="70px">
					<span style="color:red;"> <?php echo form_error('highlight_bg_image'); ?></span>
				  </div>
				</div>

				<hr>
				<h3>Project Amenties</h3>
				<?php for ($jk = 0 ; $jk < 7; $jk++){ ?>
				<input type="hidden" autocomplete="off" name="pm_id<?php echo $jk+1?>" value="<?php echo $project_amenties[$jk]->id; ?>">
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties <?php echo $jk+1; ?> 
				  </label>
				  
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pm_point1" name="pm_point<?php echo $jk+1; ?>" value="<?php echo $project_amenties[$jk]->pm_points; ?>" placeholder="Add Point <?php echo $jk+1; ?>" class="form-control col-md-7 col-xs-12">
				  </div>				  
				</div>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties Image <?php echo $jk+1; ?></label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="amenties_image<?php echo $jk+1; ?>" value="" class="form-control col-md-7 col-xs-12 ">
					<?php if($project_amenties[$jk]->pm_image){?>
					<img src="<?php echo base_url('uploads/projects/'.$project_amenties[$jk]->pm_image);?>" height="50px" width="70px">
				<?php } ?>
				  </div>
				</div>

				
				
				<?php } ?>
				

				<!--<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties 2 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php echo $project_amenties[1]->pm_points; ?>" placeholder="Add Point 2" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties 3 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php echo $project_amenties[2]->pm_points; ?>" placeholder="Add Point 3" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties 4 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php echo $project_amenties[3]->pm_points; ?>" placeholder="Add Point 4" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties 5 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php echo $project_amenties[4]->pm_points; ?>" placeholder="Add Point 5" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties 6 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php echo $project_amenties[5]->pm_points; ?>" placeholder="Add Point 6" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties 7 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php echo $project_amenties[6]->pm_points; ?>" placeholder="Add Point 7" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>-->
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties Description
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<textarea id="amenties_description" autocomplete="off" placeholder="Add Project Amenties Description" class="form-control <?php if(form_error('amenties_description')){ echo "parsley-error"; } ?>" name="amenties_description" ><?php echo $project->amenties_description; ?></textarea>
					<span style="color:red;"> <?php echo form_error('amenties_description'); ?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amenties Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="amenties_bg_image" value="" class="form-control col-md-7 col-xs-12 ">
					<img src="<?php echo base_url('uploads/projects/'.$project->amenties_bg_image);?>" height="50px" width="70px">
					<span style="color:red;"> <?php echo form_error('amenties_bg_image'); ?></span>
				  </div>
				</div>
			
				<hr>
				<h3>Project Location Map</h3>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Location Map Description
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<textarea id="location_map_description" autocomplete="off" placeholder="Add Project Location Map Description" class="form-control <?php if(form_error('location_map_description')){ echo "parsley-error"; } ?>" name="location_map_description" ><?php echo $project->location_map_description; ?></textarea>
					<span style="color:red;"> <?php echo form_error('location_map_description'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Location Map Url
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="location_map_url" name="location_map_url" value="<?php echo $project->location_map_url; ?>" placeholder="Add location map url" class="form-control col-md-7 col-xs-12 <?php if(form_error('location_map_url')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('location_map_url'); ?></span>
				  </div>
				</div>
				
				<hr>
				<h3>Project Brochure</h3>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brochure Title
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="brochure_title" name="brochure_title" value="<?php echo $project->brochure_title; ?>" placeholder="Add Brochure Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('brochure_title')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('brochure_title'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brochure Description
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<textarea id="brochure_description" autocomplete="off" placeholder="Add Project brochure Description" class="form-control <?php if(form_error('brochure_description')){ echo "parsley-error"; } ?>" name="brochure_description" ><?php echo $project->brochure_description; ?></textarea>
					<span style="color:red;"> <?php echo form_error('brochure_description'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brochure Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="brochure_image" value="" class="form-control col-md-7 col-xs-12 ">
					<img src="<?php echo base_url('uploads/projects/'.$project->brochure_image);?>" height="50px" width="70px">
					<span style="color:red;"> <?php echo form_error('brochure_image'); ?></span>
				  </div>
				</div>
				
				<hr>
				<h3>Builder Info</h3>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">About Builder Title
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="about_builder_title" name="about_builder_title" value="<?php echo $project->about_builder_title; ?>" placeholder="Add About Builder Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('about_builder_title')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('about_builder_title'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">About Builder Description
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<textarea id="about_builder_description" autocomplete="off" placeholder="Add Project About Builder Description" class="form-control <?php if(form_error('about_builder_description')){ echo "parsley-error"; } ?>" name="about_builder_description" ><?php echo $project->about_builder_description; ?></textarea>
					<span style="color:red;"> <?php echo form_error('about_builder_description'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">About Builder Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="about_builder_image" value="" class="form-control col-md-7 col-xs-12 ">
					<img src="<?php echo base_url('uploads/projects/'.$project->about_builder_image);?>" height="50px" width="70px">
					<span style="color:red;"> <?php echo form_error('about_builder_image'); ?></span>
				  </div>
				</div>

				<div class="ln_solid"></div>
				<div class="form-group">
				  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				
					<button type="submit" class="btn btn-success">Submit</button>
					<a href="<?php echo base_url() ?>admin/project_list" class="btn btn-danger">Back</a>
				  </div>
				</div>

			  </form>
			</div>
		  </div>
		</div>
	  </div>
		  
</div>
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="<?php echo base_url(); ?>js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url(); ?>js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url(); ?>js/icheck/icheck.min.js"></script>
  <!-- tags -->
  <script src="<?php echo base_url(); ?>js/tags/jquery.tagsinput.min.js"></script>
  <!-- switchery -->
  <script src="<?php echo base_url(); ?>js/switchery/switchery.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url(); ?>js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/datepicker/daterangepicker.js"></script>
  <!-- richtext editor -->
  <script src="<?php echo base_url(); ?>js/editor/bootstrap-wysiwyg.js"></script>
  <script src="<?php echo base_url(); ?>js/editor/external/jquery.hotkeys.js"></script>
  <script src="<?php echo base_url(); ?>js/editor/external/google-code-prettify/prettify.js"></script>
  <!-- select2 -->
  <script src="<?php echo base_url(); ?>js/select/select2.full.js"></script>
  <!-- form validation -->
  <script type="text/javascript" src="<?php echo base_url(); ?>js/parsley/parsley.min.js"></script>
  <!-- textarea resize -->
  <script src="<?php echo base_url(); ?>js/textarea/autosize.min.js"></script>
  <script>
    autosize($('.resizable_textarea'));
  </script>
  <!-- Autocomplete -->
  <script type="text/javascript" src="<?php echo base_url(); ?>js/autocomplete/countries.js"></script>
  <script src="<?php echo base_url(); ?>js/autocomplete/jquery.autocomplete.js"></script>
  <!-- pace -->
  <script src="<?php echo base_url(); ?>js/pace/pace.min.js"></script>
  
  <script src="<?php echo base_url(); ?>js/custom.js"></script>
  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
        <script>
                window.onload = function() {
        CKEDITOR.replace('project_description');
    };
        </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $('#category').change(function(){
    
	var cval = $('#category').val();
	//alert("hello"+cval);
	if(cval == 1){
		 $("#typology_div").show();
		 $("#bathroom_div").show();
		 $("#bedroom_div").show();
	}else{
		$("#typology_div").hide();
		 $("#bathroom_div").hide();
		 $("#bedroom_div").hide();
	}
	let formData = new FormData();
		formData.append('cat_id',cval);
	$.ajax({
			url: "<?php echo base_url('admin/getRetailType');?>",
			type:"POST",
			data:formData,
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			success: function(data){
			console.log(data);
			 $("#pr_type1").html(data);
			 $("#pr_type2").html(data);
			 $("#pr_type3").html(data);
			 $("#pr_type4").html(data);
			//alert(data);
			}
		});
  });
  
});
</script>