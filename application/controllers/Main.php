<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }
    public function index()
    {
        $data['request'] = $this->db->get('saldo')->result_array();
        $data['user'] = $this->db->get('saldo')->result_array();
        $data['trans'] = $this->db->get('transaksi')->result_array();

        $data['jml'] = $this->db->query("SELECT s.id_cust, s.nama, SUM(CASE WHEN t.jenis = 'Debet' THEN t.nominal ELSE -t.nominal END) AS total_uang
FROM transaksi t
JOIN saldo s ON t.cust_id = s.id_cust
WHERE t.jenis IN ('Debet', 'Kredit')
GROUP BY s.id_cust, s.nama
LIMIT 0, 25;")->result_array();

        $this->load->view('header', $data);
        $this->load->view('index', $data);
        $this->load->view('footer', $data);
    }

    public function tambah_user()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        
        $nama = $this->input->post('nama');
        $no = $this->db->get_where('saldo', ['id'], SORT_DESC)->row_array();
        $iteration_id = ($no['id']); 
        $new_iteration_id = $iteration_id + 1;

        var_dump($no);

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'id_cust' => "ID-" . $new_iteration_id,
                'nama' => $nama,
                'saldo' => 0
            ];
            $this->m_data->insert_data($data, 'saldo');
            redirect('main');
            // var_dump($data);
        }
    }

    public function tambah_data()
    {
        $this->form_validation->set_rules('user', 'Nama', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required');

        $user = $this->input->post('user');
        $jenis = $this->input->post('jenis');
        $nominal = $this->input->post('nominal');

        

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'cust_id' => $user,
                'jenis' => $jenis,
                'nominal' => $nominal,
                'tanggal' => time(),
            ];

            $this->m_data->insert_data($data, 'transaksi');
            redirect('main');
        }
    }

     public function hapus($id)
    {
        $where = array(
            'id' => $id
        );

        $this->m_data->delete_data($where, 'transaksi');
        redirect('main');
    }
}
