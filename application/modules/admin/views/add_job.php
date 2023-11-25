<div class="">

	  <div class="page-title">
		<div class="title_left">
		  <h3>Add new job</h3>
		</div>
		
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		  <div class="x_panel">
			
			<div class="x_content">
			  <br />
			  <form  class="form-horizontal form-label-left" method="post" autocomplete="off" action="<?php echo base_url('admin/add_job'); ?>" enctype="multipart/form-data">

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Job Title <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="title" name="title" value="<?php echo set_value('title'); ?>" required placeholder="Add Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('title')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('title'); ?></span>
				  </div>				  
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Job Type <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control col-md-7 col-xs-12 <?php if(form_error('job_type')){ echo "parsley-error"; } ?>" id="job_type" name="job_type" required>
						<option value="">Select Job Type</option>
							<option <?php if(set_value('job_type') == 1) { echo 'selected'; } ?> value="1">Fulltime</option>
							<option <?php if(set_value('job_type') == 2) { echo 'selected'; } ?> value="1">Parttime</option>
					</select>
					<span style="color:red;"> <?php echo form_error('job_type'); ?></span>
				  </div>				  
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Shift Start Time <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="time" autocomplete="off" id="shift_start_time" name="shift_start_time" value="<?php echo set_value('shift_start_time'); ?>" required placeholder="Add shift start time" class="form-control col-md-7 col-xs-12 <?php if(form_error('shift_start_time')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('shift_start_time'); ?></span>
				  </div>				  
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Shift End Time <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="time" autocomplete="off" id="shift_end_time" name="shift_end_time" value="<?php echo set_value('shift_end_time'); ?>" required placeholder="Add shift end time" class="form-control col-md-7 col-xs-12 <?php if(form_error('shift_end_time')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('shift_end_time'); ?></span>
				  </div>				  
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> No. of Postion <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="number" autocomplete="off" id="position_count" name="position_count" value="<?php echo set_value('position_count'); ?>" required placeholder="Add position_count" class="form-control col-md-7 col-xs-12 <?php if(form_error('position_count')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('position_count'); ?></span>
				  </div>				  
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Location <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="location" name="location" value="<?php echo set_value('location'); ?>" required placeholder="Add location" class="form-control col-md-7 col-xs-12 <?php if(form_error('location')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('location'); ?></span>
				  </div>				  
				</div>
				
				<div class="ln_solid"></div>
				<div class="form-group">
				  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				
					<button type="submit" class="btn btn-success">Submit</button>
					<a href="<?php echo base_url() ?>admin/blog_list" class="btn btn-danger">Back</a>
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
        CKEDITOR.replace('description');
    };
        </script>