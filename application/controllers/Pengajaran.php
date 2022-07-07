<?php
class Pengajaran extends CI_Controller{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Pengajaran_model');
		$this->load->library('form_validation');
		$this->load->helper(array('url','download'));

	}
	public function index()
	{
		
		$data['judul'] = 'DOKUMENTASI RPS';
		$data2['tbl_pengajaran'] = $this->Pengajaran_model->getAllPengajaran();
		$this->load->view('templates/header', $data);
		$this->load->view('pengajaran/index', $data2);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Create';
		$this->form_validation->set_rules('kode_mk','Kode Mata Kuliah','required');
		$this->form_validation->set_rules('mata_kuliah','Mata Kuliah','required');
		$this->form_validation->set_rules('semester','Semester','required');
		$this->form_validation->set_rules('nama_dosen','Nama Dosen','required');

		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('pengajaran/tambah');
		$this->load->view('templates/footer');	
		} else {
			$this->Pengajaran_model->tambahDataPengajaran();
			redirect('index.php/pengajaran');
		}
	}
    public function download($no_pengajaran){
		$data = $this->db->get_where('tbl_pengajaran', ['no_pengajaran' => $file]) ->row();
		force_download('tbl_pengajaran'.$data->no_pengajaran,NULL);
        if(!empty($no_pengajaran)){
            // //load download helper
            // $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->file->getRows(array('no_pengajaran' => $no_pengajaran));
            
            // //file path
            // $file =FCPATH.'uploads/files/'.$fileInfo['file_name'];
            // //download file from directory
            // force_download($file, NULL);
        } else {
        	echo "ini gagal";
        }
    }
	public function edit($no_pengajaran)
	{
		$data['judul'] = 'Form Edit';
		$data['tbl_pengajaran'] = $this->Pengajaran_model->getPengajaranById($no_pengajaran);
		$data['bobot_sks'] = ['2', '4', '6', '8'];
		$this->form_validation->set_rules('kode_mk','Kode Mata Kuliah','required');
		$this->form_validation->set_rules('mata_kuliah','Mata Kuliah','required');
		$this->form_validation->set_rules('semester','Semester','required');
		$this->form_validation->set_rules('nama_dosen','Nama Dosen','required');
		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('pengajaran/edit', $data);
		$this->load->view('templates/footer');	
		} else {
			$this->Pengajaran_model->editDataPengajaran($no_pengajaran);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('index.php/pengajaran');
		}
	}
	public function delete($no_pengajaran)
	{
		$this->Pengajaran_model->deleteDataPengajaran($no_pengajaran);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('index.php/pengajaran');
	}
	

}
?>