<?php defined("BASEPATH") or exit();

class Karyawan extends CI_Controller
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
            'DataAgama' => $this->db->get('tb_MasterAgama')->result(),
            'DataSuku' => $this->db->get('tb_MasterSuku')->result(),
            'page' => "data/karyawan",
            'menu' => "admin/menu",
            'js'   => "jquery/js_karyawan"
        ];
        $this->load->view("main_template", $data);
    }

    public function create()
    {
        $data = [
            'page' => "data/tambah",
            'menu' => "admin/menu",
            'js'   => "jquery/js_kontrak"
        ];
        $this->load->view("main_template", $data);
    }

    public function store()
    {
        $input_tgl =  $this->input->post('tgl1');
        $tanggal = explode('-', $input_tgl);
        $tgl_mulai = $tanggal[0];
        $tgl_selesai = $tanggal[1];
        print_r(($tgl_mulai));
        print_r(($tgl_selesai));
        // print_r($this->input->post());
    }

    public function detail($id)
    {
        $data = [
            'page' => "data/detail",
            'menu' => "admin/menu",
            'js'   => "jquery/js_kontrak",
            'detail' => $this->db->get_where('tb_MasterKaryawan', ['IDKaryawan' => $id])->row(),
        ];
        // echo json_encode($data);
        $this->load->view("main_template", $data);
    }
    public function kontrak($id)
    {
        $data = [
            'page' => "data/kontrak",
            'menu' => "admin/menu",
            'js'   => "jquery/js_kontrak",
            'detail' => $this->db->get_where('tb_MasterKaryawan', ['IDKaryawan' => $id])->row(),
        ];
        // echo json_encode($data);
        $this->load->view("main_template", $data);
    }
    public function c_document()
    {
        $data = [
            'page' => "data/c_document",
            'menu' => "admin/menu",
            'js'   => "jquery/js_apd"
            // 'karyawan'    => $this->load->model("init_model")
        ];
        $this->load->view("main_template", $data);
    }

    public function load_data()
    {
        $data = $this->db->select('a.*, b.Agama, c.Suku')
            ->from('tb_MasterKontrak as a')
            // ->join('tb_MasterAgama as b', 'b.IDAgama=a.IDAgama')
            // ->join('tb_MasterSuku as c', 'c.IDSuku=a.IDSuku')
            ->get()->result();

        // $data = $this->k->get_all("tb_MasterKaryawan", "IDKaryawan")->result_array();
        echo json_encode($data);
    }
    public function search_data()
    {
        $id = $this->input->post('idq');
        $where = ['IDKaryawan' => $id];
        $data = $this->k->get_by_id("tb_MasterKaryawan", $where)->row_array();
        echo json_encode(['value' => $data]);
    }
    public function save_data()
    {
        $query     = false;
        $id     = $this->input->post('idq');
        // $sql = "SELECT * FROM tb_MasterKaryawan ORDER BY IDKaryawan DESC LIMIT 1";
        // $insert_id = $this->db->query($sql)->row()->IDKaryawan + 1;
        //edit data
        $content = array(
            'NoKTP'            => $this->input->post('no_ktp'),
            'NamaLengkap'    => $this->input->post('nama_lengkap'),
            'Tempatlahir'    => $this->input->post('tempat_lahir'),
            'TglLahir'        => $this->input->post('TglLahir'),
            'IDBank'        => 1,
            'IDAgama'        => 1,
            'IDKota'        => 1,
            'IDSuku'        => 1,
            'KewargaNegaraan' => 1,
        );
        if ($id == "") {

            $query = $this->db->insert("tb_MasterKontrakKaryawan", $content);
        } else {
            $query = $this->k->update("tb_MasterKontrakKaryawan", array('IDKontrak' => $id), $content);
        }
        if ($query) {
            $data = ['status' => "ok"];
        }
        echo json_encode($data);
    }
    public function delete_data()
    {
        $query = false;
        $id = $this->input->post('idq');
        $query = $this->k->delete_by_id("tb_MasterKaryawan", array('IDKontrak' => $id));
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
