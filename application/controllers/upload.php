 <?php
class  upload extends CI_Controller{
	public function index(){
		$config['upload_path']="./assets/images/vehicles/";
		$config['allowed_types']='jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload()){
			$data=array('path'=>$this->upload->display_errors());
			$this->load->view('template/header');
            $this->load->view('Admin/addvehicle',$data);
            $this->load->view('template/footer');
		}
		else{
			$filedata=$this->upload->data();
			$data['path']='assets/images/vehicles/'.$filedata['file_name'];
			$this->load->view('template/header');
            $this->load->view('Admin/addvehicle',$data);
            $this->load->view('template/footer');
		}
	}
	
}

?>