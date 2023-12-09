<div class="">

	  <div class="page-title">
		<div class="title_left">
		  <h3>Project Sliders</h3>
		</div>
		
	  </div>
	  <div class="clearfix"></div>
	  <div class="col-md-12 col-sm-12 ">
	  <?php if($msg) { ?>
<div class="alert alert-success alert-dismissible" role="alert">
    <?php echo $msg; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
                        <?php if($this->session->userdata('msgError')) { ?>
<div class="alert alert-danger alert-dismissible" role="alert">
    <?php echo $this->session->flashdata('msgError'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
                <div class="x_panel">
                  <div class="x_title">
                      <a href="<?php echo base_url(); ?>admin/add_p_slider" style="float:right" class="btn btn-primary">Add New Slider</a>
                    <div class="clearfix"></div>
                  </div>
				 
                  <div class="x_content">
				 
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="" class="table table-striped	text-center" style="">
                      <thead>
                        <tr>
						   <th class="text-center">Project</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
						<?php if($project_sliders) { foreach($project_sliders as $row) {

						$project =  $this->common_model->getsingle('projects', array('id'=>$row->project_id));
							?>
							
							
							<tr>
							<td> <?php echo $project->project_title; ?> </td>
							<td width="15%;"><a href="<?php echo base_url()?>uploads/projects/<?php echo $row->image ?>" target="blank"><img src="<?php echo base_url()?>uploads/projects/<?php echo $row->image ?>" alt="blog" width="130px;"></a></td>
							
							<td><a href="<?php echo base_url(); ?>admin/delete_p_slider/<?php echo $row->id ?>" onclick="return confirm('Do you want to delete the Slider');" class="btn btn-danger">Delete</a>
							</td>
							</tr>
                        <?php }} ?>
                      </tbody>
                    </table>
					  <!-- pagination start -->
					  <div class="mr-10" style="float:right;">
                                        <?php if (isset($links)) { ?>
                                            <nav class="" aria-label="Page navigation example">
                                        <?php echo $links ?>
                                            </nav>
                                        <?php } ?>
                                    </div>
                                    <!-- pagination end  -->
                  </div>
                  </div>
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
