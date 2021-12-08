<?php defined("BASEPATH") or exit();

class Karyawan_init extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //($this->session->has_userdata("id") && $this->session->userdata("akses") == 1) ? true : redirect();
        $this->load->model("init_model", "k");
    }

    public function index()
    {
        $data = [
            'page' => "admin/karyawan",
            'menu' => "admin/menu",
            'js'   => "admin/jquery/js_karyawan"
        ];
        $this->load->view("main_template", $data);
    }

    private function load_data()
    {
        $data = $this->k->get_all("tb_MasterKaryawan", "IDKaryawan")->result_array();
        echo json_encode($data);
    }
    private function search_data()
    {
        $id = $this->input->post('idq');
        $where = ['IDKaryawan' => $id];
        $data = $this->k->get_by_id("tb_MasterKaryawan", $where)->row_array();
        echo json_encode(['value' => $data]);
    }
    private function save_data()
    {
        $query     = false;
        $id     = $this->input->post('idq');
        $content = array(
            'NoKTP'          => strtoupper($this->input->post('nomor_ktp')),
            'NamaLengkap'    => strtoupper($this->input->post('nama_lengkap')),
            'TempatLahir'    => strtoupper($this->input->post('TempatLahir')),
            'TglLahir'       => strtoupper($this->input->post('Tglahir'))
        );
        if ($id == "") {
            $query = $this->k->save("tb_MasterKaryawan", $content);
        } else {
            $query = $this->k->update("tb_MasterKaryawan", array('IDKaryawan' => $id), $content);
        }
        if ($query) {
            $data = ['status' => "ok"];
        }
        echo json_encode($data);
    }
    private function delete_data()
    {
        $query = false;
        $id = $this->input->post('idq');
        $query = $this->k->delete_by_id("tb_MasterKaryawan", array('IDKaryawan' => $id));
        if ($query) {
            $data = ['status' => "ok"];
        }
        echo json_encode($data);
    }

    public function get($func)
    {
        switch ($func) {
            case "data":
                echo self::load_data();
                break;
            case "view":
                echo self::search_data();
                break;
            case "remove":
                echo self::delete_data();
                break;
            case "save":
                echo self::save_data();
                break;
        }
    }
}
