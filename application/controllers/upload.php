<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
		
		
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']	= '10000';


		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('searchview',$data);
			include("pdftextimg.php");		 
		}
		
	}
	function search()
	{
		$srch=$this->input->post('srch');
		$this->load->model('finalmodel');
		$row=$this->finalmodel->selectdb($srch);

		if(is_numeric($srch))
    	{
		if(isset($row->reg))
			
		{
			
			$rowdata=array('regno'=>$row->reg,'classno'=>$row->cls,'cmpname'=>$row->cn,'cmpadd'=>$row->ca,'cmplogo'=>$row->logo);
			$this->load->view('searchview',$rowdata);
			
		}
		else 
		{
			
			$rowdata=array('noentry'=>"NO ENTRY FOUND.");
			$this->load->view('searchview',$rowdata);
		    
		}
	}
	else
	{
		$rowdata=array('noentry'=>"Invalid Registration No.");
			$this->load->view('searchview',$rowdata);
	}
		
	}
	function searchold()
	{
		$this->load->view('searchview');
	}
	
}

?>
