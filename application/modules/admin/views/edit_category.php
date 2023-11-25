<div class="">

	  <div class="page-title">
		<div class="title_left">
		  <h3>Edit Category</h3>
		</div>
		
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		  <div class="x_panel">
			
			<div class="x_content">
			  <br />
			  <form  class="form-horizontal form-label-left" method="post" autocomplete="off" action="<?= base_url() ?>admin/edit_category/<?php if($data) { echo $data->id;} ?>" enctype="multipart/form-data">

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="title" readonly name="title" value="<?php if($data) { echo $data->category;} ?>" placeholder="Add Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('title')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('title'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Current Main Image <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <a href="<?php echo base_url()?>uploads/projects/<?php if($data) { echo $data->main_image;} ?>" target="blank"><img src="<?php echo base_url()?>uploads/projects/<?php if($data) { echo $data->main_image;} ?>" alt="Current Main Image" width="25%;"></a>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Main Image <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="image" value="" class="form-control col-md-7 col-xs-12 " >
					<span style="color:red;"> <?php echo form_error('image'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Current Background Image <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <a href="<?php echo base_url()?>uploads/projects/<?php if($data) { echo $data->bg_image;} ?>" target="blank"><img src="<?php echo base_url()?>uploads/projects/<?php if($data) { echo $data->bg_image;} ?>" alt="Current Background Image" width="25%;"></a>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Background Image <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="bg_image" value="" class="form-control col-md-7 col-xs-12 " >
					<span style="color:red;"> <?php echo form_error('bg_image'); ?></span>
				  </div>
				</div>

				
				<div class="ln_solid"></div>
				<div class="form-group">
				  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				
					<button type="submit" class="btn btn-success">Update</button>
					<a href="<?php echo base_url() ?>admin/category_list" class="btn btn-danger">Back</a>
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