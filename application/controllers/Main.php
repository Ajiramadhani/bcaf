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
        $data['request'] = $this->db->get('trouble')->result_array();
        $data['jml_request'] = $this->m_data->get_data('trouble')->num_rows();
        $data['jml'] = $this->db->query("SELECT request_by, COUNT(*) AS jumlah FROM trouble GROUP BY request_by ORDER BY jumlah DESC;")->result_array();
        $data['jml_cat'] = $this->db->query("SELECT troubleshoot_cat, COUNT(*) AS jumlah FROM trouble GROUP BY troubleshoot_cat ORDER BY jumlah DESC;")->result_array();

        $this->load->view('header', $data);
        $this->load->view('index', $data);
        $this->load->view('footer', $data);
    }
    public function tambah_data()
    {
        $this->form_validation->set_rules('ticket', 'Ticket', 'required');
        $this->form_validation->set_rules('trob_date', 'Tanggal Trouble', 'required');
        $this->form_validation->set_rules('trob_cat', 'Trouble Category', 'required');
        $this->form_validation->set_rules('req_by', 'Request User', 'required');

        $ticket = $this->input->post('ticket');
        $trob_date = $this->input->post('trob_date');
        $trob_cat = $this->input->post('trob_cat');
        $req_by = $this->input->post('req_by');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'ticket_no' => $ticket,
                'troubleshoot_date' => $trob_date,
                'troubleshoot_cat' => $trob_cat,
                'request_by' => $req_by
            ];
            $this->m_data->insert_data($data, 'trouble');
            redirect('main');
            // var_dump($data);
        }
    }
}
