<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   	public function __construct()
	{
		parent::__construct();
		 $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		date_default_timezone_set('Asia/Calcutta'); 
		$this->userid = $this->session->userdata('user_id');
		$this->load->model(array('common_model'));
		
	}
	
	public function index($page = '')
	{
		if($this->session->userdata('id') !='')
		{	
			$data['msg'] = $this->session->flashdata('msg');
			
			$data['main_content'] = 'dashboard';
			$this->load->view('includes/admin_template',$data);
		}
		else
		{
			redirect('login');
		}
            
	}
	
	public function project_sliders()
	{
		if($this->session->userdata('id') !='')
		{	
			$data['msg'] = $this->session->flashdata('msg');
			$data['project_sliders'] = $this->common_model->getAllwhere('project_sliders', array());
			$data['main_content'] = 'project_sliders';
			$this->load->view('includes/admin_template',$data);
		}
		else
		{
			redirect('login');
		}
            
	}
	
	public function home_sliders()
	{
		if($this->session->userdata('id') !='')
		{	
			$data['msg'] = $this->session->flashdata('msg');
			$data['home_sliders'] = $this->common_model->getAllwhere('home_sliders', array());
			$data['main_content'] = 'home_sliders';
			$this->load->view('includes/admin_template',$data);
		}
		else
		{
			redirect('login');
		}
            
	}
	
	public function delete_slider($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->common_model->deleteData('home_sliders', array('id' => $id));
		$this->session->set_flashdata('msg', 'Slider Image deleted successfully.');
		redirect('admin/home_sliders');
	}
	
	public function delete_p_slider($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->common_model->deleteData('project_sliders', array('id' => $id));
		$this->session->set_flashdata('msg', 'Slider Image deleted successfully.');
		redirect('admin/project_sliders');
	}
	
	public function add_slider()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/sliders';
		$config['upload_path']          =$file_path;
   		$config['allowed_types']        = '*';
   		$this->load->library('upload', $config);
		
		$this->form_validation->set_rules('title', 'Title', 'trim');
		
		if($this->form_validation->run())
		{
			if($this->upload->do_upload('image'))
			{
				$image = $this->upload->data('file_name');
				//$insert['title'] = $this->input->post('title');
				$insert['image'] = $image;			
				$res = $this->common_model->insertData('home_sliders', $insert);
				if($res){
					$this->session->set_flashdata('msg', 'Slider Image added successfully.');
				} else {
					$this->session->set_flashdata('msgError', 'Slider Image failed to add.');
				}

			}else{
				$this->session->set_flashdata('msgError',$this->upload->display_errors());
			}

			
			
			redirect('admin/home_sliders');
		}

		$data['main_content'] = 'add_slider';
		$this->load->view('includes/admin_template',$data);
	}

	public function add_p_slider()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/projects';
		$config['upload_path']          =$file_path;
   		$config['allowed_types']        = '*';
   		$this->load->library('upload', $config);
		
		$this->form_validation->set_rules('project_id', 'Project', 'trim|required');
		
		if($this->form_validation->run())
		{
			if($this->upload->do_upload('image'))
			{
				$image = $this->upload->data('file_name');
				$insert['project_id'] = $this->input->post('project_id');
				$insert['image'] = $image;			
				$res = $this->common_model->insertData('project_sliders', $insert);
				if($res){
					$this->session->set_flashdata('msg', 'Slider Image added successfully.');
				} else {
					$this->session->set_flashdata('msgError', 'Slider Image failed to add.');
				}

			}else{
				$this->session->set_flashdata('msgError',$this->upload->display_errors());
			}

			
			
			redirect('admin/project_sliders');
		}
		
		$data['projects'] = $this->common_model->getAllwhere('projects', array());
		
		$data['main_content'] = 'add_p_slider';
		$this->load->view('includes/admin_template',$data);
	}

	public function add_blog()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/blogs';
		$config['upload_path']          =$file_path;
   		$config['allowed_types']        = '*';
   		$this->load->library('upload', $config);
		
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');

		if($this->form_validation->run())
		{
			if($this->upload->do_upload('image'))
			{
				$image = $this->upload->data('file_name');
			}

			$title = $this->input->post('title');
			$slug = url_title($title, 'dash', TRUE);
			
			$checkSlug = $this->common_model->getsingle('blogs', array('slug' => $slug));
			
			if ($checkSlug) 
			{
				for ($i = 1; $i <= 99999; $i++) 
				{
					$rand = rand(11, 99);
					$newSlug = $slug . '-' . $rand;
					$checkNewSlug = $this->common_model->getsingle('blogs', array('slug' => $newSlug));
					if (!$checkNewSlug) {
						$slug = $newSlug;
						break; 
					}
				}
			}
			
			$insert['title'] = $this->input->post('title');
			$insert['image'] = $image;
			$insert['description'] = $this->input->post('description');
			$insert['slug'] = $slug;
			$insert['date'] = date('y-m-d h:i:s');

			$res = $this->common_model->insertData('blogs', $insert);
			if($res){
				$this->session->set_flashdata('msg', 'Blog added successfully.');
			} else {
				$this->session->set_flashdata('msgError', 'Blog failed to add.');
			}

			redirect('admin/blog_list');
		}

		$data['main_content'] = 'add_blog';
		$this->load->view('includes/admin_template',$data);
	}

	public function blog_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('blogs', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/blog_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('blogs', $config['per_page'], $page, array(), 'id', 'desc');
		// echo "<pre>"; print_r($data['data']); die;
		$data['main_content'] = 'blog_list';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function delete_blog($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->common_model->deleteData('blogs', array('id' => $id));
		$this->session->set_flashdata('msg', 'Blog deleted successfully.');
		redirect('admin/blog_list');
	}

	public function edit_blog($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/blogs';
		$config['upload_path']          =$file_path;
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		
		$data['data'] = $rec = $this->common_model->getsingle('blogs', array('id' => $id));
		$image = $old_image = $rec->image;
		$slug = $rec->slug;
		$old_title = $rec->title;

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');

		if($this->form_validation->run())
		{
			if($this->upload->do_upload('image'))
			{
				$image = $this->upload->data('file_name');
				unlink('uploads/blogs/'.$old_image);
			}

			$title = $this->input->post('title');
			
			if($title != $old_title OR $slug == '')
			{
				$slug = url_title($title, 'dash', TRUE);
			
				$checkSlug = $this->common_model->getsingle('blogs', array('slug' => $slug));
				
				if ($checkSlug) 
				{
					for ($i = 1; $i <= 99999; $i++) 
					{
						$rand = rand(11, 99);
						$newSlug = $slug . '-' . $rand;
						$checkNewSlug = $this->common_model->getsingle('blogs', array('slug' => $newSlug));
						if (!$checkNewSlug) {
							$slug = $newSlug;
							break; 
						}
					}
				}
			}
			
			$insertUpd['title'] = $title;
			$insertUpd['image'] = $image;
			$insertUpd['description'] = $this->input->post('description');
			$insertUpd['slug'] = $slug;

			$res = $this->common_model->updateData('blogs', $insertUpd, array('id' => $id));
			$this->session->set_flashdata('msg', 'Blog updated successfully.');
			redirect('admin/blog_list');
		}

		$data['main_content'] = 'edit_blog';
		$this->load->view('includes/admin_template',$data);
	}

	public function add_project()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

			//echo "<pre>"; print_r($this->input->post()); die;
		$file_path =  'uploads/projects';
		$config['upload_path']          =$file_path;
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		
		$this->form_validation->set_rules('category', 'Category', 'trim|required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'trim|required');
		$this->form_validation->set_rules('project_status', 'Project Status', 'trim|required');
		$this->form_validation->set_rules('project_type', 'Project Type', 'trim|required');
		$this->form_validation->set_rules('price', 'Project Price', 'trim|required');
		$this->form_validation->set_rules('payment_plan', 'Payment Plan', 'trim|required');
		$this->form_validation->set_rules('rera_no', 'Rera number', 'trim|required');
		$this->form_validation->set_rules('property_size', 'Property size', 'trim|required');
		//$this->form_validation->set_rules('typology', 'Typology', 'trim|required');
		$this->form_validation->set_rules('address', 'Location', 'trim|required');
		$this->form_validation->set_rules('project_description', 'Project description', 'trim|required');

		/*$this->form_validation->set_rules('pr_title1', 'Retail Title 1', 'trim|required');
		$this->form_validation->set_rules('pr_size1', 'Retail Size 1', 'trim|required');
		$this->form_validation->set_rules('pr_price1', 'Retail price 1', 'trim|required');
		$this->form_validation->set_rules('pr_type1', 'Retail type 1', 'trim|required');

		$this->form_validation->set_rules('pr_title2', 'Retail Title 2', 'trim|required');
		$this->form_validation->set_rules('pr_size2', 'Retail Size 2', 'trim|required');
		$this->form_validation->set_rules('pr_price2', 'Retail price 2', 'trim|required');
		$this->form_validation->set_rules('pr_type2', 'Retail type 2', 'trim|required');

		$this->form_validation->set_rules('pr_title3', 'Retail Title 3', 'trim|required');
		$this->form_validation->set_rules('pr_size3', 'Retail Size 3', 'trim|required');
		$this->form_validation->set_rules('pr_price3', 'Retail price 3', 'trim|required');
		$this->form_validation->set_rules('pr_type3', 'Retail type 3', 'trim|required');*/

		if($this->form_validation->run())
		{
			if($this->upload->do_upload('bg_image'))
			{
				$bg_image = $this->upload->data('file_name');
			}

			if($this->upload->do_upload('project_image'))
			{
				$project_image = $this->upload->data('file_name');
			}

			if($this->upload->do_upload('highlight_bg_image'))
			{
				$highlight_bg_image = $this->upload->data('file_name');
			}
			
			if($this->upload->do_upload('retail_bg_image'))
			{
				$retail_bg_image = $this->upload->data('file_name');
			}
			
			if($this->upload->do_upload('amenties_bg_image'))
			{
				$amenties_bg_image = $this->upload->data('file_name');
			}
			if($this->upload->do_upload('brochure_image'))
			{
				$brochure_image = $this->upload->data('file_name');
			}
			if($this->upload->do_upload('about_builder_image'))
			{
				$about_builder_image = $this->upload->data('file_name');
			}

			$project_title = $this->input->post('project_title');
			$slug = url_title($project_title, 'dash', TRUE);
			$checkSlug = $this->common_model->getsingle('projects', array('slug' => $slug));
			if ($checkSlug) 
			{
				for ($i = 1; $i <= 99999; $i++) 
				{
					$rand = rand(11, 99);
					$newSlug = $slug . '-' . $rand;
					$checkNewSlug = $this->common_model->getsingle('projects', array('slug' => $newSlug));
					if (!$checkNewSlug) {
						$slug = $newSlug;
						break; 
					}
				}
			}

			$Project_insert['category'] = $this->input->post('category');
			$Project_insert['project_title'] = $this->input->post('project_title');
			$Project_insert['project_status'] = $this->input->post('project_status');
			$Project_insert['project_type'] = $this->input->post('project_type');
			$Project_insert['price'] = $this->input->post('price');
			$Project_insert['payment_plan'] = $this->input->post('payment_plan');
			$Project_insert['rera_no'] = $this->input->post('rera_no');
			$Project_insert['property_size'] = $this->input->post('property_size');
			$Project_insert['property_bedroom'] = $this->input->post('property_bedroom');
			$Project_insert['property_bathroom'] = $this->input->post('property_bathroom');
			$Project_insert['typology'] = $this->input->post('typology');
			$Project_insert['address'] = $this->input->post('address');
			$Project_insert['project_short_description'] = $this->input->post('project_short_description');
			$Project_insert['project_description'] = $this->input->post('project_description');
			$Project_insert['bg_image'] = $bg_image;
			$Project_insert['project_image'] = $project_image;
			$Project_insert['highlight_bg_image'] = $highlight_bg_image;
			$Project_insert['key_highlights_description'] = $this->input->post('key_highlights_description');
			$Project_insert['amenties_bg_image'] = $amenties_bg_image;
			$Project_insert['retail_bg_image'] = $retail_bg_image;
			$Project_insert['amenties_description'] = $this->input->post('amenties_description');
			$Project_insert['featured_listing'] = $this->input->post('featured_listing');
			$Project_insert['location_map_description'] = $this->input->post('location_map_description');
			$Project_insert['location_map_url'] = $this->input->post('location_map_url');
			$Project_insert['brochure_title'] = $this->input->post('brochure_title');
			$Project_insert['brochure_description'] = $this->input->post('brochure_description');
			$Project_insert['brochure_image'] = $brochure_image;
			$Project_insert['about_builder_title'] = $this->input->post('about_builder_title');
			$Project_insert['about_builder_description'] = $this->input->post('about_builder_description');
			$Project_insert['about_builder_image'] = $about_builder_image;
			$Project_insert['popular'] = $this->input->post('popular');
			//$Project_insert['guaranteed_return_project'] = $this->input->post('guaranteed_return_project');
			//$Project_insert['other_properties'] = $this->input->post('other_properties');
			$Project_insert['slug'] = $slug;
			$Project_insert['date'] = date('Y-m-d');
			//echo "<pre>"; print_r($Project_insert); die;
			$project_id = $this->common_model->insertData('projects', $Project_insert);
			
			$insert_retail1['project_id'] = $project_id; 
			$insert_retail1['pr_title'] = $this->input->post('pr_title1'); 
			$insert_retail1['pr_size'] = $this->input->post('pr_size1'); 
			$insert_retail1['pr_price'] = $this->input->post('pr_price1'); 
			$insert_retail1['pr_type'] = $this->input->post('pr_type1'); 

			$this->common_model->insertData('project_retail', $insert_retail1);

			$insert_retail2['project_id'] = $project_id; 
			$insert_retail2['pr_title'] = $this->input->post('pr_title2'); 
			$insert_retail2['pr_size'] = $this->input->post('pr_size2'); 
			$insert_retail2['pr_price'] = $this->input->post('pr_price2'); 
			$insert_retail2['pr_type'] = $this->input->post('pr_type2'); 

			$this->common_model->insertData('project_retail', $insert_retail2);

			$insert_retail3['project_id'] = $project_id; 
			$insert_retail3['pr_title'] = $this->input->post('pr_title3'); 
			$insert_retail3['pr_size'] = $this->input->post('pr_size3'); 
			$insert_retail3['pr_price'] = $this->input->post('pr_price3'); 
			$insert_retail3['pr_type'] = $this->input->post('pr_type3'); 

			$this->common_model->insertData('project_retail', $insert_retail3);
			
			$insert_retail4['project_id'] = $project_id; 
			$insert_retail4['pr_title'] = $this->input->post('pr_title4'); 
			$insert_retail4['pr_size'] = $this->input->post('pr_size4'); 
			$insert_retail4['pr_price'] = $this->input->post('pr_price4'); 
			$insert_retail4['pr_type'] = $this->input->post('pr_type4'); 

			$this->common_model->insertData('project_retail', $insert_retail4);

			$data['ph_point_array'] = $ph_point = $this->input->post('ph_point');
			for ($i=0; $i < count($ph_point) ; $i++) { 
			
				$insert_ph['project_id'] = $project_id;;
				$insert_ph['ph_point'] = $ph_point[$i];
				

				$this->common_model->insertData('project_highlights', $insert_ph);
			}

			$data['pm_point_array'] = $pm_point = $this->input->post('pm_point');
			for ($i=0; $i < count($pm_point) ; $i++) { 
			$jj = $i+1;
			if($this->upload->do_upload('amenties_image'.$jj))
			{
				$aminities_image = $this->upload->data('file_name');
			}
				$insert_pm['project_id'] = $project_id;;
				$insert_pm['pm_points'] = $pm_point[$i];
				$insert_ph['pm_image'] = $aminities_image;

				$this->common_model->insertData('project_amenties', $insert_pm);
			}

			redirect('admin/project_list');
		}

		$data['retail_type'] = $this->common_model->getAllwhere('retail_type', array());
		$data['category'] = $this->common_model->getAllwhere('categories', array());
		$data['project_status'] = $this->common_model->getAllwhere('project_status', array());
		// echo "<pre>"; print_r($data['category']); die;
		$data['main_content'] = 'add_project';
		$this->load->view('includes/admin_template',$data);
	}

	public function project_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('projects', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/project_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('projects', $config['per_page'], $page, array(), 'id', 'desc');

		$data['main_content'] = 'project_list';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function delete_project($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->common_model->deleteData('project_retail', array('project_id' => $id));
		$this->common_model->deleteData('project_amenties', array('project_id' => $id));
		$this->common_model->deleteData('project_highlights', array('project_id' => $id));
		$this->common_model->deleteData('projects', array('id' => $id));

		$this->session->set_flashdata('msg', 'Project deleted successfully.');
		redirect('admin/project_list');
	}

	public function edit_project($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}
		$data['project'] = $project =  $this->common_model->getsingle('projects', array('id'=>$id));
		$project_id = $id;
			//echo $_FILES['about_builder_image']['name']; die;
			
		
			//echo "<pre>"; print_r($this->input->post()); 
			//die;
		$file_path =  'uploads/projects';
		$config['upload_path']          =$file_path;
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		
		$this->form_validation->set_rules('category', 'Category', 'trim|required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'trim|required');
		$this->form_validation->set_rules('project_status', 'Project Status', 'trim|required');
		$this->form_validation->set_rules('project_type', 'Project Type', 'trim|required');
		$this->form_validation->set_rules('price', 'Project Price', 'trim|required');
		$this->form_validation->set_rules('payment_plan', 'Payment Plan', 'trim|required');
		$this->form_validation->set_rules('rera_no', 'Rera number', 'trim|required');
		$this->form_validation->set_rules('property_size', 'Property size', 'trim|required');
		//$this->form_validation->set_rules('typology', 'Typology', 'trim|required');
		$this->form_validation->set_rules('address', 'Location', 'trim|required');
		$this->form_validation->set_rules('project_description', 'Project description', 'trim|required');

		/*$this->form_validation->set_rules('pr_title1', 'Retail Title 1', 'trim|required');
		$this->form_validation->set_rules('pr_size1', 'Retail Size 1', 'trim|required');
		$this->form_validation->set_rules('pr_price1', 'Retail price 1', 'trim|required');
		$this->form_validation->set_rules('pr_type1', 'Retail type 1', 'trim|required');

		$this->form_validation->set_rules('pr_title2', 'Retail Title 2', 'trim|required');
		$this->form_validation->set_rules('pr_size2', 'Retail Size 2', 'trim|required');
		$this->form_validation->set_rules('pr_price2', 'Retail price 2', 'trim|required');
		$this->form_validation->set_rules('pr_type2', 'Retail type 2', 'trim|required');

		$this->form_validation->set_rules('pr_title3', 'Retail Title 3', 'trim|required');
		$this->form_validation->set_rules('pr_size3', 'Retail Size 3', 'trim|required');
		$this->form_validation->set_rules('pr_price3', 'Retail price 3', 'trim|required');
		$this->form_validation->set_rules('pr_type3', 'Retail type 3', 'trim|required');*/

		if($this->form_validation->run())
		{
			//echo "hello";die;
			if($this->upload->do_upload('bg_image'))
				{
					$bg_image = $this->upload->data('file_name');
				}
			
			if($this->upload->do_upload('project_image'))
			{
				$project_image = $this->upload->data('file_name');
			}

			if($this->upload->do_upload('highlight_bg_image'))
			{
				$highlight_bg_image = $this->upload->data('file_name');
			}

			 if($this->upload->do_upload('amenties_bg_image'))
			{
				$amenties_bg_image = $this->upload->data('file_name');
			}
			
			 if($this->upload->do_upload('brochure_image'))
			{
				$brochure_image = $this->upload->data('file_name');
			}
			
			if($this->upload->do_upload('retail_bg_image'))
			{
				$retail_bg_image = $this->upload->data('file_name');
			}
			
			 if($this->upload->do_upload('about_builder_image'))
			{
				$about_builder_image = $this->upload->data('file_name');
			}
			$old_title = $project->project_title;
			$slug = $project->slug;
			$project_title = $this->input->post('project_title');
			if($project_title != $old_title OR $slug=="")
			{
				$slug = url_title($project_title, 'dash', TRUE);
				$checkSlug = $this->common_model->getsingle('projects', array('slug' => $slug));
				if ($checkSlug) 
				{
					for ($i = 1; $i <= 99999; $i++) 
					{
						$rand = rand(11, 99);
						$newSlug = $slug . '-' . $rand;
						$checkNewSlug = $this->common_model->getsingle('projects', array('slug' => $newSlug));
						if (!$checkNewSlug) {
							$slug = $newSlug;
							break; 
						}
					}
				}
			}
//echo $slug;
	//	die;
			$Project_insert['category'] = $this->input->post('category');
			$Project_insert['project_title'] = $this->input->post('project_title');
			$Project_insert['project_status'] = $this->input->post('project_status');
			$Project_insert['project_type'] = $this->input->post('project_type');
			$Project_insert['price'] = $this->input->post('price');
			$Project_insert['payment_plan'] = $this->input->post('payment_plan');
			$Project_insert['rera_no'] = $this->input->post('rera_no');
			$Project_insert['property_size'] = $this->input->post('property_size');
			$Project_insert['property_bedroom'] = $this->input->post('property_bedroom');
			$Project_insert['property_bathroom'] = $this->input->post('property_bathroom');
			$Project_insert['typology'] = $this->input->post('typology');
			$Project_insert['address'] = $this->input->post('address');
			$Project_insert['project_short_description'] = $this->input->post('project_short_description');
			$Project_insert['project_description'] = $this->input->post('project_description');
			$Project_insert['bg_image'] = $bg_image?$bg_image:$project->bg_image;
			$Project_insert['project_image'] = $project_image?$project_image:$project->project_image;
			$Project_insert['highlight_bg_image'] = $highlight_bg_image?$highlight_bg_image:$project->highlight_bg_image;
			$Project_insert['key_highlights_description'] = $this->input->post('key_highlights_description');
			$Project_insert['amenties_bg_image'] = $amenties_bg_image?$amenties_bg_image:$project->amenties_bg_image;
			$Project_insert['amenties_description'] = $this->input->post('amenties_description');
			$Project_insert['featured_listing'] = $this->input->post('featured_listing');
			$Project_insert['location_map_description'] = $this->input->post('location_map_description');
			$Project_insert['location_map_url'] = $this->input->post('location_map_url');
			$Project_insert['brochure_title'] = $this->input->post('brochure_title');
			$Project_insert['brochure_description'] = $this->input->post('brochure_description');
			$Project_insert['brochure_image'] = $brochure_image?$brochure_image:$project->brochure_image;
			$Project_insert['retail_bg_image'] = $retail_bg_image?$retail_bg_image:$project->retail_bg_image;
			
			$Project_insert['about_builder_title'] = $this->input->post('about_builder_title');
			$Project_insert['about_builder_description'] = $this->input->post('about_builder_description');
			$Project_insert['about_builder_image'] = $about_builder_image?$about_builder_image:$project->about_builder_image;
			$Project_insert['popular'] = $this->input->post('popular');
			//$Project_insert['guaranteed_return_project'] = $this->input->post('guaranteed_return_project');
			//$Project_insert['other_properties'] = $this->input->post('other_properties'); 
			$Project_insert['slug'] = $slug;
			$Project_insert['date'] = date('Y-m-d');
			//echo "<pre>"; print_r($Project_insert); die; 
			$project_id_update = $this->common_model->updateData('projects', $Project_insert, array('id' => $id));
			
			
			$project_retail = $this->common_model->getAllwhere('project_retail', array('project_id'=>$id));
			$this->common_model->deleteData('project_retail', array('project_id' => $id));
		if($this->input->post('pr_title1')!='') 
		{
			echo "1";
			$insert_retail1['project_id'] = $project_id;				
			$insert_retail1['pr_title'] = $this->input->post('pr_title1'); 
			$insert_retail1['pr_size'] = $this->input->post('pr_size1'); 
			$insert_retail1['pr_price'] = $this->input->post('pr_price1'); 
			$insert_retail1['pr_type'] = $this->input->post('pr_type1'); 
			$this->common_model->insertData('project_retail', $insert_retail1);
		}
		if($this->input->post('pr_title2')!='') 
		{
			echo "12";
			$insert_retail1['project_id'] = $project_id;				
			$insert_retail1['pr_title'] = $this->input->post('pr_title2'); 
			$insert_retail1['pr_size'] = $this->input->post('pr_size2'); 
			$insert_retail1['pr_price'] = $this->input->post('pr_price2'); 
			$insert_retail1['pr_type'] = $this->input->post('pr_type2'); 
			$this->common_model->insertData('project_retail', $insert_retail1);
		}
		if($this->input->post('pr_title3')!='') {
			echo "3";
			$insert_retail1['project_id'] = $project_id;				
			$insert_retail1['pr_title'] = $this->input->post('pr_title3'); 
			$insert_retail1['pr_size'] = $this->input->post('pr_size3'); 
			$insert_retail1['pr_price'] = $this->input->post('pr_price3'); 
			$insert_retail1['pr_type'] = $this->input->post('pr_type3'); 
			$this->common_model->insertData('project_retail', $insert_retail1);
		}
		if( $this->input->post('pr_title4')!='') {
			echo "3";
			$insert_retail1['project_id'] = $project_id;				
			$insert_retail1['pr_title'] = $this->input->post('pr_title4'); 
			$insert_retail1['pr_size'] = $this->input->post('pr_size4'); 
			$insert_retail1['pr_price'] = $this->input->post('pr_price4'); 
			$insert_retail1['pr_type'] = $this->input->post('pr_type4'); 
			$this->common_model->insertData('project_retail', $insert_retail1);
		}
		
		
		/*foreach($project_retail as $k => $pr){ 
				$kk = $k+1;
					$insert_retail1['project_id'] = $project_id;				
					$insert_retail1['pr_title'] = $this->input->post('pr_title'.$kk); 
					$insert_retail1['pr_size'] = $this->input->post('pr_size'.$kk); 
					$insert_retail1['pr_price'] = $this->input->post('pr_price'.$kk); 
					$insert_retail1['pr_type'] = $this->input->post('pr_type'.$kk); 
					$this->common_model->updateData('project_retail',$insert_retail1,array('id'=>$pr->id));
		}*/
			
			
			for ($ij=0; $ij < 7 ; $ij++) {
				$j = $ij+1;
				//echo $j = $ij+1;echo "--".$this->input->post('ph_id'.$j);
			$phid = $this->input->post('ph_id'.$j);
			$ph_point = $this->input->post('ph_point'.$j);
			if($phid!=''){
			//echo $phid."--".$j."--".$ph_point."</br>";
			$insert_ph['project_id'] = $project_id;;
				$insert_ph['ph_point'] = $ph_point;
				$this->common_model->updateData('project_highlights', $insert_ph,array('id'=>$phid));
			}else{
			//echo $j."lll";
			$insert_ph['project_id'] = $project_id;;
				$insert_ph['ph_point'] = $ph_point;
				$this->common_model->insertData('project_highlights', $insert_ph);
			}
			
			}
			
			$pm_point1 = $this->input->post('pm_point1');
			$pm_id1 = $this->input->post('pm_id1');
			//echo $pm_id1; echo $pm_point1; die;
			$pa1 = $this->common_model->getsingle('project_amenties', array('project_id'=>$id,'id'=>$pm_id1));
			
			if($this->upload->do_upload('amenties_image1'))
				{
					$aminities_image = $this->upload->data('file_name');
					$insert_pm['pm_image'] = $aminities_image;
				}else{
					$insert_pm['pm_image'] = $pa1->pm_image;
				}
			$insert_pm['project_id'] = $id;				
			$insert_pm['pm_points'] = $pm_point1; 
			 if($pm_id1 && $pm_point1){
			$this->common_model->updateData('project_amenties', $insert_pm,array('id'=>$pm_id1));
			 }else{
				$this->common_model->insertData('project_amenties', $insert_pm); 
			 }
			 
			 $pm_point2 = $this->input->post('pm_point2');
			$pm_id2 = $this->input->post('pm_id2');
			$pa2 = $this->common_model->getsingle('project_amenties', array('project_id'=>$id,'id'=>$pm_id2));
			if($this->upload->do_upload('amenties_image2'))
				{
					$aminities_image = $this->upload->data('file_name');
					$insert_pm['pm_image'] = $aminities_image;
				}else{
					$insert_pm['pm_image'] = $pa2->pm_image;
				}
			$insert_pm['project_id'] = $id;				
			$insert_pm['pm_points'] = $pm_point2; 
			 if($pm_id2 && $pm_point2){
			$this->common_model->updateData('project_amenties', $insert_pm,array('id'=>$pm_id2));
			 }else{
				$this->common_model->insertData('project_amenties', $insert_pm); 
			 }
			 
			$pm_point3 = $this->input->post('pm_point3');
			$pm_id3 = $this->input->post('pm_id3');
			$pa3 = $this->common_model->getsingle('project_amenties', array('project_id'=>$id,'id'=>$pm_id3));
			if($this->upload->do_upload('amenties_image3'))
				{
					$aminities_image = $this->upload->data('file_name');
					$insert_pm['pm_image'] = $aminities_image;
				}else{
					$insert_pm['pm_image'] = $pa3->pm_image;
				}
			$insert_pm['project_id'] = $id;				
			$insert_pm['pm_points'] = $pm_point3; 
			 if($pm_id3 && $pm_point3){
			$this->common_model->updateData('project_amenties', $insert_pm,array('id'=>$pm_id3));
			 }else{
				$this->common_model->insertData('project_amenties', $insert_pm); 
			 }
			 
			 $pm_point4 = $this->input->post('pm_point4');
			$pm_id4 = $this->input->post('pm_id4');
			$pa4 = $this->common_model->getsingle('project_amenties', array('project_id'=>$id,'id'=>$pm_id4));
			if($this->upload->do_upload('amenties_image4'))
				{
					$aminities_image = $this->upload->data('file_name');
					$insert_pm['pm_image'] = $aminities_image;
				}else{
					$insert_pm['pm_image'] = $pa4->pm_image;
				}
			$insert_pm['project_id'] = $id;				
			$insert_pm['pm_points'] = $pm_point4; 
			 if($pm_id4 && $pm_point4){
			$this->common_model->updateData('project_amenties', $insert_pm,array('id'=>$pm_id4));
			 }else{
				$this->common_model->insertData('project_amenties', $insert_pm); 
			 }
			 
			 $pm_point5 = $this->input->post('pm_point5');
			$pm_id5 = $this->input->post('pm_id5');
			$pa5 = $this->common_model->getsingle('project_amenties', array('project_id'=>$id,'id'=>$pm_id5));
			if($this->upload->do_upload('amenties_image5'))
				{
					$aminities_image = $this->upload->data('file_name');
					$insert_pm['pm_image'] = $aminities_image;
				}else{
					$insert_pm['pm_image'] = $pa5->pm_image;
				}
			$insert_pm['project_id'] = $id;				
			$insert_pm['pm_points'] = $pm_point5; 
			 if($pm_id5 && $pm_point5){
			$this->common_model->updateData('project_amenties', $insert_pm,array('id'=>$pm_id5));
			 }else{
				$this->common_model->insertData('project_amenties', $insert_pm); 
			 }
			 
			 $pm_point6 = $this->input->post('pm_point6');
			$pm_id6 = $this->input->post('pm_id6');
			$pa6 = $this->common_model->getsingle('project_amenties', array('project_id'=>$id,'id'=>$pm_id6));
			if($this->upload->do_upload('amenties_image6'))
				{
					$aminities_image = $this->upload->data('file_name');
					$insert_pm['pm_image'] = $aminities_image;
				}else{
					$insert_pm['pm_image'] = $pa6->pm_image;
				}
			$insert_pm['project_id'] = $id;				
			$insert_pm['pm_points'] = $pm_point6; 
			 if($pm_id6 && $pm_point6){
			$this->common_model->updateData('project_amenties', $insert_pm,array('id'=>$pm_id6));
			 }else{
				$this->common_model->insertData('project_amenties', $insert_pm); 
			 }
			 
			 $pm_point7 = $this->input->post('pm_point7');
			$pm_id7 = $this->input->post('pm_id7');
			$pa7 = $this->common_model->getsingle('project_amenties', array('project_id'=>$id,'id'=>$pm_id7));
			if($this->upload->do_upload('amenties_image7'))
				{
					$aminities_image = $this->upload->data('file_name');
					$insert_pm['pm_image'] = $aminities_image;
				}else{
					$insert_pm['pm_image'] = $pa7->pm_image;
				}
			$insert_pm['project_id'] = $id;				
			$insert_pm['pm_points'] = $pm_point7; 
			 if($pm_id7 && $pm_point7){
			$this->common_model->updateData('project_amenties', $insert_pm,array('id'=>$pm_id7));
			 }else{
				$this->common_model->insertData('project_amenties', $insert_pm); 
			 }
			 
		
			
			/*for ($jk=0; $jk < 7 ; $jk++) {
				$jj = $jk+1;
			
			$pmid = $this->input->post('pm_id'.$jj);
			$pm_point = $this->input->post('pm_point'.$jj);
			
			$pa = $this->common_model->getsingle('project_amenties', array('project_id'=>$id,'id'=>$pmid));
			
			if($pmid!=''){
			 $insert_pm['project_id'] = $project_id;;
				$insert_pm['pm_points'] = $pm_point;
				
				if($this->upload->do_upload('amenties_image'.$jj))
				{
					$aminities_image = $this->upload->data('file_name');
					$insert_pm['pm_image'] = $aminities_image;
				}else{
					$insert_pm['pm_image'] = $pa->pm_image;
				}
				$this->common_model->updateData('project_amenties', $insert_pm,array('id'=>$pmid));
			}else{
			
			$insert_pm['project_id'] = $project_id;;
				$insert_pm['pm_points'] = $pm_point;
				$insert_pm['pm_image'] = $aminities_image;
				$this->common_model->insertData('project_amenties', $insert_pm);
			}
			
			}*/ //die;
			

			

			redirect('admin/project_list');
		}


		
		$data['project_retail'] = $this->common_model->getAllwhere('project_retail', array('project_id'=>$id));
		$data['project_highlights'] = $this->common_model->getAllwhere('project_highlights', array('project_id'=>$id));
		$data['project_amenties'] = $this->common_model->getAllwhere('project_amenties', array('project_id'=>$id));
		$data['retail_type'] = $this->common_model->getAllwhere('retail_type', array('cat_id'=>$project->category));
		$data['category'] = $this->common_model->getAllwhere('categories', array());
		$data['project_status'] = $this->common_model->getAllwhere('project_status', array());

		$data['main_content'] = 'edit_project';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function add_job()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('job_type', 'job_type', 'trim|required');
		$this->form_validation->set_rules('shift_start_time', 'shift_start_time', 'trim|required');
		$this->form_validation->set_rules('shift_end_time', 'shift_end_time', 'trim|required');
		$this->form_validation->set_rules('position_count', 'position_count', 'trim|required');
		$this->form_validation->set_rules('job_type', 'job_type', 'trim|required');
		$this->form_validation->set_rules('location', 'location', 'trim|required');

		if($this->form_validation->run())
		{
			
			$title = $this->input->post('title');
			$slug = url_title($title, 'dash', TRUE);
			
			$checkSlug = $this->common_model->getsingle('job_openings', array('slug' => $slug));
			
			if ($checkSlug) 
			{
				for ($i = 1; $i <= 99999; $i++) 
				{
					$rand = rand(11, 99);
					$newSlug = $slug . '-' . $rand;
					$checkNewSlug = $this->common_model->getsingle('job_openings', array('slug' => $newSlug));
					if (!$checkNewSlug) {
						$slug = $newSlug;
						break; 
					}
				}
			}
			
			$insert['title'] = $this->input->post('title');
			$insert['job_type'] = $this->input->post('job_type');
			$insert['shift_start_time'] = $this->input->post('shift_start_time');
			$insert['shift_end_time'] = $this->input->post('shift_end_time');
			$insert['position_count'] = $this->input->post('position_count');
			$insert['location'] = $this->input->post('location');
			$insert['posted_by'] = 1;
			
			$insert['slug'] = $slug;
			$insert['date'] = date('y-m-d h:i:s');

			$res = $this->common_model->insertData('job_openings', $insert);
			if($res){
				$this->session->set_flashdata('msg', 'Job added successfully.');
			} else {
				$this->session->set_flashdata('msgError', 'Job failed to add.');
			}

			redirect('admin/job_list');
		}

		$data['main_content'] = 'add_job';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function job_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('job_openings', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/job_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('job_openings', $config['per_page'], $page, array(), 'id', 'desc');
		// echo "<pre>"; print_r($data['data']); die;
		$data['main_content'] = 'job_list';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function delete_job($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->common_model->deleteData('job_openings', array('id' => $id));
		$this->session->set_flashdata('msg', 'Job deleted successfully.');
		redirect('admin/job_list');
	}
	
	public function edit_job($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$data['data'] = $rec = $this->common_model->getsingle('job_openings', array('id' => $id));
		$image = $old_image = $rec->image;
		$slug = $rec->slug;
		$old_title = $rec->title;

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('job_type', 'job_type', 'trim|required');
		$this->form_validation->set_rules('shift_start_time', 'shift_start_time', 'trim|required');
		$this->form_validation->set_rules('shift_end_time', 'shift_end_time', 'trim|required');
		$this->form_validation->set_rules('position_count', 'position_count', 'trim|required');
		$this->form_validation->set_rules('job_type', 'job_type', 'trim|required');
		$this->form_validation->set_rules('location', 'location', 'trim|required');

		if($this->form_validation->run())
		{
			
			$title = $this->input->post('title');
			
			if($title != $old_title OR $slug == '')
			{
				$slug = url_title($title, 'dash', TRUE);
			
				$checkSlug = $this->common_model->getsingle('job_openings', array('slug' => $slug));
				
				if ($checkSlug) 
				{
					for ($i = 1; $i <= 99999; $i++) 
					{
						$rand = rand(11, 99);
						$newSlug = $slug . '-' . $rand;
						$checkNewSlug = $this->common_model->getsingle('job_openings', array('slug' => $newSlug));
						if (!$checkNewSlug) {
							$slug = $newSlug;
							break; 
						}
					}
				}
			}
			
			$insertUpd['title'] = $this->input->post('title');
			$insertUpd['job_type'] = $this->input->post('job_type');
			$insertUpd['shift_start_time'] = $this->input->post('shift_start_time');
			$insertUpd['shift_end_time'] = $this->input->post('shift_end_time');
			$insertUpd['position_count'] = $this->input->post('position_count');
			$insertUpd['location'] = $this->input->post('location');
			$insertUpd['slug'] = $slug;

			$res = $this->common_model->updateData('job_openings', $insertUpd, array('id' => $id));
			$this->session->set_flashdata('msg', 'Job updated successfully.');
			redirect('admin/job_list');
		}

		$data['main_content'] = 'edit_job';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function ContactUs_List()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('contactus', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/ContactUs_List";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('contactus', $config['per_page'], $page, array(), 'id', 'desc');
		// echo "<pre>"; print_r($data['data']); die;
		$data['main_content'] = 'ContactUs_List';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function chkadminemail($email,$id='')
	{
		$chk = $this->common_model->getsingle('users', array('email'=>$email,'id !='=>$id));			
		if ($chk)
		{			
			$this->form_validation->set_message('chkadminemail', 'Email Address already exist.');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	public function profile()
	{
		$id = $this->session->userdata('id');
		$data['admin'] = $ad = $this->common_model->getsingle('users', array('id' => $id));
		$password = $ad->password;

		$password_input = $this->input->post('password');

		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|callback_chkadminemail['.$id.']');
		if($password_input){
			$this->form_validation->set_rules('password', 'New Password', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
		}

		if($this->form_validation->run())
		{
			if($password_input){
				$password = md5($this->input->post('password'));
			}
			
			$prof['email'] = $this->input->post('email');
			$prof['password'] = $password;

			$this->common_model->updateData('users', $prof, array('id' => $id));
			$this->session->set_flashdata('msg', 'Profile Updated Successfully');
			redirect('admin/profile');
		}

		$data['main_content'] = 'profile';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function getRetailType()
	{
		echo $cat_id = $this->input->post('cat_id');
		$retail_type = $this->common_model->getAllwhere('retail_type', array('cat_id'=>$cat_id));
		$type = '<option value="" >Select Type </option>';
		if(count($retail_type)>0)
		{
			foreach($retail_type as $row)
			{
				$type .= '<option value="'.$row->id.'">'.$row->type.'</option>';
			} 
		}
		echo $type;
		
	}
	
	public function subscribe_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('subscribe', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/subscribe_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('subscribe', $config['per_page'], $page, array(), 'id', 'desc');
		// echo "<pre>"; print_r($data['data']); die;
		$data['main_content'] = 'subscribe_list';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function enquiry_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('enquiry_project', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/enquiry_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('enquiry_project', $config['per_page'], $page, array(), 'id', 'desc');
		// echo "<pre>"; print_r($data['data']); die;
		$data['main_content'] = 'enquiry_list';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function delete_list($id,$page)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}
		if($page == 'contact'){
			$this->common_model->deleteData('contactus', array('id' => $id));
			$this->session->set_flashdata('msg', 'Contact Detail deleted successfully.');
			redirect('admin/contactUs_list');
		}
		if($page == 'enquiry'){
			$this->common_model->deleteData('enquiry_project', array('id' => $id));
			$this->session->set_flashdata('msg', 'Enquiry Detail deleted successfully.');
			redirect('admin/enquiry_list');
		}
		if($page == 'subscribe'){
			$this->common_model->deleteData('subscribe', array('id' => $id));
			$this->session->set_flashdata('msg', 'Subscribe Detail deleted successfully.');
			redirect('admin/subscribe_list');
		}

		
	}
	
	public function category_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('categories', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/category_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('categories', $config['per_page'], $page, array(), 'id', 'desc');
		// echo "<pre>"; print_r($data['data']); die;
		$data['main_content'] = 'category_list';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function edit_category($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/projects';
		$config['upload_path']          =$file_path;
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		
		$data['data'] = $rec = $this->common_model->getsingle('categories', array('id' => $id));
		$main_image = $old_main_image = $rec->main_image;
		$bg_image = $old_bg_image = $rec->bg_image;
		
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		
		if($this->form_validation->run())
		{
			if($this->upload->do_upload('image'))
			{
				$main_image = $this->upload->data('file_name');
				unlink('uploads/projects/'.$old_main_image);
			}
			if($this->upload->do_upload('bg_image'))
			{
				$bg_image = $this->upload->data('file_name');
				unlink('uploads/projects/'.$old_bg_image);
			}

			$title = $this->input->post('title');
			
			
			
			
			$insertUpd['main_image'] = $main_image;
			$insertUpd['bg_image'] = $bg_image;
			
			$res = $this->common_model->updateData('categories', $insertUpd, array('id' => $id));
			$this->session->set_flashdata('msg', 'category updated successfully.');
			redirect('admin/category_list');
		}

		$data['main_content'] = 'edit_category';
		$this->load->view('includes/admin_template',$data);
	}
}	

?>	