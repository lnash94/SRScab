 <?php
class  upload extends CI_Controller{
	public function index(){
		$config['upload_path']="./assets/images/vehicles/";//settingup upload directory
		$config['allowed_types']='jpg|jpeg|gif|png';//settingup allowed upload file types
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload()){
			$data=array('path'=>$this->upload->display_errors());
			$this->load->view('template/header');
            $this->load->view('Admin/addvehicle',$data);
            $this->load->view('template/footer');
		}
		else{
			$filedata=$this->upload->data();
			$data['path']=$filedata['file_name'];//sending the uploaded file name
			$this->load->view('template/header');
            $this->load->view('Admin/addvehicle',$data);
            $this->load->view('template/footer');
		}
	}
	
}

?>