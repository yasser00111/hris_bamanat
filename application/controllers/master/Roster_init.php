<?php defined("BASEPATH") or exit(); 

class Roster_init extends CI_Controller {
	public function __construct() {
		parent::__construct();
		//($this->session->has_userdata("id") && $this->session->userdata("akses") == 1) ? true : redirect();
		$this->load->model("init_model", "k");
	}
	
	public function index() {
		$data = [
			'page' => "admin/roster",
			'menu' => "admin/menu",
			'js'   => "admin/jquery/js_roster"
		];
		$this->load->view("main_template", $data);	
	}

	private function load_data(){
		$data = $this->k->get_all("tb_MasterRoster","IDRoster")->result_array();
		echo json_encode($data);
	}
	private function search_data(){
		$id = $this->input->post('idq');
		$where = ['IDRoster'=> $id];
		$data = $this->k->get_by_id("tb_MasterRoster",$where)->row_array();
		echo json_encode(['value' => $data]);
	}
	private function save_data(){
		$query 	= false;
		$id 	= $this->input->post('idq');		
		$content = array(
			'Roster'	=> strtoupper($this->input->post('namaroster'))
		);
		if($id == ""){
			$query = $this->k->save("tb_MasterRoster",$content);
		}else{
			$query = $this->k->update("tb_MasterRoster",array('IDRoster'=>$id), $content);
		}		
		if($query){ $data=['status'=> "ok"]; }
		echo json_encode($data);
	}
	private function delete_data(){
		$query = false;
		$id = $this->input->post('idq');
		$query = $this->k->delete_by_id("tb_MasterRoster",array('IDRoster'=>$id));
		if($query){ $data=['status'=> "ok"]; }
		echo json_encode($data);
	}
	
	public function get($func) {
		switch($func) {
			case "data" :
				echo self::load_data();
				break;
			case "view" :
				echo self::search_data();
				break;
			case "remove" :
				echo self::delete_data();
				break;
			case "save" :
				echo self::save_data();
				break;
		}
	}
}

?>