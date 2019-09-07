<?php 

class Parking extends CI_Controller{

	public function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('error','Maaf anda belum log in');    
                redirect('logincontroller');
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper('text');
        $this->load->helper(array('form', 'url'));
        $this->load->library('image_lib');
        $this->load->library('form_validation');
		$this->load->model('Model_parkir');
	}

	function index(){
        $data['plat'] = $this->Model_parkir->getDataWhere('data_mobil', 'status','0');
        $data['tipe'] = $this->Model_parkir->getData('data_tipe');
        $data['warna'] = $this->Model_parkir->getData('data_warna');
		$this->load->view('dashboard', $data);
	}
    
    function masterdata(){
        $data['plat'] = $this->Model_parkir->getDataWhere('data_mobil', 'status','0');
        $data['tipe'] = $this->Model_parkir->getData('data_tipe');
        $data['warna'] = $this->Model_parkir->getData('data_warna');
        $data['parking_lot'] = $this->Model_parkir->getData('parking_lot');
		$this->load->view('master_data', $data);
	}
    
    function statistik(){
        $data['parkir_sekarang'] = $this->Model_parkir->statistik_tipe('0');
        $data['riwayat_parkir'] = $this->Model_parkir->statistik_tipe('1');
        $data['berdasarkan_warna'] = $this->Model_parkir->getBerdasarkanWarna();
		$this->load->view('statistic', $data);
	}
    
    function data_entry(){
        $plat_no = $this->input->post('plat');
        $warna = $this->input->post('warna');
        $tipe = $this->input->post('tipe');
        
        $data['lot'] = $this->Model_parkir->getDataWhere2('parking_lot', 'status','0', 'parking', 'ASC');
        if(count($data['lot']) == 0){
            echo "<script>
			alert('Maaf Parkir Telah Penuh');
			window.location.href='".base_url('Parking')."';
			</script>";
            
        } else{    
            $parking_lot = $data['lot'][0]->parking;
            $data = array(
                            'plat_no'		=> $plat_no,
                            'warna_mobil'   => $warna,
                            'tipe_mobil'	=> $tipe,
                            'tanggal_masuk' => date("Y-m-d"),
                            'jam_masuk'     => date("H:i:s"),
                            'parking_lot'   => $parking_lot
                        );

            $this->Model_parkir->addData('data_mobil', $data);
            
            $data_lot = array(
                            'status'		=> 1
                        );
            
            $this->Model_parkir->updateData('parking_lot', 'parking', $parking_lot, $data_lot);
            
            $data['data_mobil'] = $this->Model_parkir->getDataWhere('data_mobil', 'plat_no', $plat_no);
            $this->load->view('print_in', $data);
        }
	}
    
    function data_out(){
        $id = $this->input->post('plat');
        $jam = date("H:i:s");
        $tgl = date("Y-m-d");
            
            $data_out = array(
                            'status'		=> 1,
                            'jam_keluar'    => $jam,
                            'tanggal_keluar'=> $tgl
                        );
            
            $this->Model_parkir->updateData('data_mobil', 'id', $id, $data_out);
        
            $data['total_jam'] = $this->Model_parkir->total_jam($id);
            $data['biaya_parkir'] = $this->Model_parkir->getDataWhere('data_tipe', 'id_tipe', $data['total_jam'][0]->tipe_mobil);
            
            $data_lot = array(
                            'status'		=> 0
                        );
            
            $this->Model_parkir->updateData('parking_lot', 'parking', $data['total_jam'][0]->parking_lot, $data_lot);
        
            $total_jam = (int)$data['total_jam'][0]->TotalJam;
            
            if($total_jam > 1){
                $jam_total = $total_jam - 1;
                $biaya_tipe = $data['biaya_parkir'][0]->jam_pertama;
                $biaya_perjam = $jam_total * $data['biaya_parkir'][0]->perjam;
                $biaya_total = $biaya_tipe + $biaya_perjam;
            } else {
                $biaya_total = $data['biaya_parkir'][0]->jam_pertama;
            }
            
            $data_biaya = array(
                            'biaya'		 => $biaya_total
                        );
            
            $this->Model_parkir->updateData('data_mobil', 'id', $id, $data_biaya);
        
            $data['data_mobil'] = $this->Model_parkir->getDataWhere('data_mobil', 'id', $id);
            $this->load->view('print_out', $data);
    }
    
    
    public function delWarna()
    {
        $id_warna = $this->input->post('id_warna');
        $this->Model_parkir->deleteData('data_warna', 'id_warna', $id_warna);
    
        redirect('Parking/masterdata');
    }
    
    public function delTipe()
    {
        $id_tipe = $this->input->post('id_tipe');
        $this->Model_parkir->deleteData('data_tipe', 'id_tipe', $id_tipe);
    
        redirect('Parking/masterdata');
    }
    
    function delParking(){
        $parking = $this->input->post('parking');
        $this->Model_parkir->deleteData('parking_lot', 'parking', $parking);
    
        redirect('Parking/masterdata');
	}
    
    function addparking(){
        $parking = $this->input->post('parking');
        $data = array(
                            'parking'		=> $parking
                        );

            $this->Model_parkir->addData('parking_lot', $data);
    
        redirect('Parking/masterdata');
	}
    
    function addWarna(){
        $warna = $this->input->post('warna');
        $data = array(
                            'warna'		=> $warna
                        );

            $this->Model_parkir->addData('data_warna', $data);
    
        redirect('Parking/masterdata');
	}
    
    function addTipe(){
        $tipe = $this->input->post('tipe');
        $jam_pertama = $this->input->post('jam_pertama');
        $perjam = ($jam_pertama*20)/100;
        $data = array(
                            'tipe'		        => $tipe,
                            'jam_pertama'		=> $jam_pertama,
                            'perjam'            => $perjam
                        );

        $this->Model_parkir->addData('data_tipe', $data);
    
        redirect('Parking/masterdata');
	}
    
    function updateWarna(){
        $id_warna = $this->input->post('id_warna');
        $warna = $this->input->post('warna');
        
        $data = array(
                            'warna'		=> $warna
                        );

        $this->Model_parkir->updateData('data_warna', 'id_warna', $id_warna, $data);
    
        redirect('Parking/masterdata');
	}
    
    function updateTipe(){
        $id_tipe = $this->input->post('id_tipe');
        $tipe = $this->input->post('tipe');
        $jam_pertama = $this->input->post('jam_pertama');
        $perjam = ($jam_pertama*20)/100;
        
        $data = array(
                            'tipe'		        => $tipe,
                            'jam_pertama'		=> $jam_pertama,
                            'perjam'            => $perjam
                        );

        $this->Model_parkir->updateData('data_tipe', 'id_tipe', $id_tipe, $data);
    
        redirect('Parking/masterdata');
	}
}