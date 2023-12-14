<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	
	public function isMobileDevice() { 
		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
	|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" 
	, $_SERVER["HTTP_USER_AGENT"]); 
	} 

	public function index($page = '')
	{
		$data['msg'] = $this->session->flashdata('msg');
		$data['featured_project'] = $results = $this->common_model->getAllwhere('projects', array('featured_listing'=>1));
		
		$data['populars'] = $this->common_model->getAllwhere('projects', array('popular'=>1));
		if($this->isMobileDevice()){ 
			$data['home_sliders'] = $this->common_model->getAllwhere('home_sliders', array('type'=>'m'));
		} 
		else { 
			$data['home_sliders'] = $this->common_model->getAllwhere('home_sliders', array('type'=>'d'));
		} 
		
		
		$data['categories'] = $this->common_model->getallwhere('categories', array());
		$data['blogs'] = $this->common_model->getAllwherelimit('blogs', array(),'3','id','desc');
		$data['main_content'] = 'dashboard';
		$this->load->view('includes/home_template',$data);
	}
	
	public function autosearch()
	{
		$search = $this->input->post('search');
		$category_id = $this->input->post('category_id');
		$data = $this->common_model->getAllwhere2(array(), '', $search, $category_id ,'5');
		
		$html ='';
		if($data)
		{
			foreach($data as $val)
			{
				$html .='<li><a id="'.$val->project_title.'" onclick="autofit(this.id)" > '.$val->project_title.'</a></li>';
			}
		}else{
		$html .='<li><a href="#"> No Record Found</a></li>';	
		}
		
		echo $html;
	}

	public function about()
	{
		$data['msg'] = $this->session->flashdata('msg');
		
		$data['main_content'] = 'about_us';
		$this->load->view('includes/home_template',$data);
	}
	
	public function project_listing()
	{
		
		if($_GET['project_status_id']){
			$data['project_status_id'] = $project_status = $_GET['project_status_id'];
		}
		if($_GET['location']){
			$data['locationS'] = $location = $_GET['location'];
		}
		if($_GET['category_id']){
			$data['category_id'] = $category_id = $_GET['category_id'];
		}
		//echo "hello"; die;
		$data['featured_listing'] = $this->common_model->getAllwhere2(array(), $project_status, $location, $category_id);
		//echo $this->db->last_query();
		//echo "<pre>"; print_r($data['featured_listing']); die;
		
		$data['prStatus'] = $this->common_model->getallwhere('project_status', array());
		$data['categories'] = $this->common_model->getallwhere('categories', array());
		
		$data['main_content'] = 'project_listing';
		$this->load->view('includes/home_template',$data);
	}
	
	public function project($slug='')
	{
		$data['msg'] = $this->session->flashdata('msg');
		
		$data['results'] = $results = $this->common_model->getsingle('projects', array('slug'=>$slug));
		$id = $results->id;
		$data['id'] = $id;
		$data['populars'] = $this->common_model->getAllwhere('projects', array('slug !='=>$slug));
		
		$data['project_highlights'] = $results = $this->common_model->getAllwhere('project_highlights', array('project_id'=>$id));
		$data['project_amenties'] = $results = $this->common_model->getAllwhere('project_amenties', array('project_id'=>$id));
		$data['project_retail'] = $results = $this->common_model->getAllwhere('project_retail', array('project_id'=>$id));
		
		if($this->isMobileDevice()){ 
			$data['project_sliders'] = $this->common_model->getAllwhere('project_sliders', array('type'=>'m','project_id'=>$id));
		} 
		else { 
			$data['project_sliders'] = $this->common_model->getAllwhere('project_sliders', array('type'=>'d','project_id'=>$id));
		} 
		
		$data['main_content'] = 'project';
		$this->load->view('includes/home_template',$data);
	}
	
	public function blogs($id='')
	{
		$data['msg'] = $this->session->flashdata('msg');
		$data['results'] = $results = $this->common_model->getAllwhere('blogs', array());
		$data['pblog'] = $pblog = $this->common_model->getAllwhere_pagination('blogs', '','3', array(), 'id', 'desc');
		//$where = "id!='' ORDER BY RAND() LIMIT 3";
		 
		$data['main_content'] = 'blog';
		$this->load->view('includes/home_template',$data);
	}
	
	public function blog_listing($slug='')
	{
		$data['msg'] = $this->session->flashdata('msg');
		$data['results'] = $results = $this->common_model->getAllwhere('blogs', array('slug'=>$slug));
		$data['pblog'] = $pblog = $this->common_model->getAllwhere_pagination('blogs', '','3', array(), 'id', 'desc');
		
		$data['main_content'] = 'blog_listing';
		$this->load->view('includes/home_template',$data);
	}
	
	public function career()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$data['results'] = $results = $this->common_model->getAllwhere('job_openings', array());
		
		$data['main_content'] = 'career';
		$this->load->view('includes/home_template',$data);
	}
	
	public function contactus()
	{
		$data['msg'] = $this->session->flashdata('msg');
		$data['categories'] = $this->common_model->getallwhere('categories', array());
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required');
		$this->form_validation->set_rules('location', 'location', 'trim|required');

		if($this->form_validation->run())
		{
			//print_r($this->input->post());die;
			//$title = $this->input->post('title');
			$insert['name'] = $this->input->post('name');
			$insert['email'] = $this->input->post('email');
			$insert['phone'] = $this->input->post('phone');
			$insert['location'] = $this->input->post('location');
			$insert['category'] = $this->input->post('category');
			$insert['comment'] = $this->input->post('comment');
			$insert['date'] = date('y-m-d h:i:s');

			$res = $this->common_model->insertData('contactus', $insert);
			if($res){
				$this->session->set_flashdata('msg', 'Our team will contact you soon!!');
			} else {
				$this->session->set_flashdata('msgError', 'Cantact failed to add.');
			}
			redirect('home/contactus');
		}
		$data['main_content'] = 'contactus';
		$this->load->view('includes/home_template',$data);
	}
	
	public function thank_you()
	{

		if($_POST)
		{
			if($this->input->post('project_id')){
				$project_id = $this->input->post('project_id');
			} else {
				$project_id = '';
			}

			$ins['project_id'] = $project_id;
			$ins['full_name'] = $this->input->post('full_name');
			$ins['city'] = $this->input->post('city');
			$ins['email'] = $this->input->post('email');
			$ins['contact'] = $this->input->post('contact');
			$ins['date'] = date('Y-m-d');

			$this->common_model->insertData('enquiry_project', $ins);
			redirect('thankyou');
		}
		
		$data['main_content'] = 'thanku';
		$this->load->view('includes/home_template',$data);
		
		
	}
	
	public function thankyou(){
		$data['main_content'] = 'thanku';
		$this->load->view('includes/home_template',$data);
		
	}
	
	public function privacyPolicy(){
		$data['main_content'] = 'privacyPolicy';
		$this->load->view('includes/home_template',$data);
		
	}
	
	public function subscribe()
	{
		if($_POST)
		{
			$ins['email'] = $this->input->post('email');
			$ins['date'] = date('Y-m-d');

			$this->common_model->insertData('subscribe', $ins);
			redirect('thankyou');
		}
		
		$data['main_content'] = 'thanku';
		$this->load->view('includes/home_template',$data);
		
		
	}
	

}

?>	