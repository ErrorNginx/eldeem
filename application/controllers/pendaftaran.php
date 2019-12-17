<?php
class Pendaftaran extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_pendaftaran');
	}
	function index(){
		$jum=$this->M_pendaftaran->get_portfolio();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=6;
        $config['base_url'] = base_url() . 'pendaftaran/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $this->pagination->initialize($config);
        $x['page'] =$this->pagination->create_links();
		$x['data']=$this->M_pendaftaran->get_portfolio_per_page($offset,$limit);
		$this->load->view('v_register',$x);
	}

}