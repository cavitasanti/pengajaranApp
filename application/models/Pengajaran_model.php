<?php 

class Pengajaran_model extends CI_model {
	public function getAllPengajaran()
	{
		return $this->db->get('tbl_pengajaran')->result_array();

	}
	public function tambahDataPengajaran()
	{
		
		$data = [
			"kode_mk"=>$this->input->post('kode_mk', true),
		 	"mata_kuliah"=>$this->input->post('mata_kuliah', true),
			"semester"=>$this->input->post('semester', true),
			"bobot_sks"=>$this->input->post('bobot_sks', true),
			"nama_dosen"=>$this->input->post('nama_dosen', true)];

        	$data['soal_ujian']='';
        	$_FILES['soal_ujian']['name'];

        	$config['upload_path']='./uploads';
        	$config['allowed_types']='docx|doc|pdf|html';

        	$this->load->library('upload',$config);

        	if(!$this->upload->do_upload('soal_ujian'))
        	{
        		echo 'soal & rps gagal diupload';
        	}else{
        		$soal_ujian=$this->upload->data('file_name');
        		$data['soal_ujian']=$soal_ujian;

        	}


        	$data['upload_rps']='';
        	$_FILES['upload_rps']['name'];

        	if(!$this->upload->do_upload('upload_rps'))
        	{
        		echo 'soal & rps gagal diupload';
        	}else{
        		$upload_rps=$this->upload->data('file_name');
        		$data['upload_rps']=$upload_rps;

        	}
        	$this->db->insert('tbl_pengajaran',$data);

        	redirect('index.php/pengajaran');

	
	}





    public function download($no_pengajaran)
    {
        $query = $this->db->get_where('tbl_pengajaran',array('no_pengajaran'=>$no_pengajaran));
        return $query->row_array();
    }
	public function deleteDataPengajaran($no_pengajaran)
	{
		$this->db->where('no_pengajaran', $no_pengajaran);
		$this->db->delete('tbl_pengajaran');
	}
	public function getPengajaranById($no_pengajaran)
	{
		return $this->db->get_where('tbl_pengajaran', ['no_pengajaran'=>$no_pengajaran])->row_array();
	}
	public function editDataPengajaran($no_pengajaran)
	{

		$data = [
			"kode_mk"=> $this->input->post('kode_mk', true),
			"mata_kuliah"=> $this->input->post('mata_kuliah', true),
			"semester"=> $this->input->post('semester', true),
			"bobot_sks"=> $this->input->post('bobot_sks', true),
			"nama_dosen"=> $this->input->post('nama_dosen', true) ];

			$_file=$this->db->get_where('tbl_pengajaran',['no_pengajaran' => $no_pengajaran])->row();
        	$_FILES['soal_ujian']['name'];

        	$config['upload_path']='./uploads';
        	$config['allowed_types']='docx|doc|pdf|html';

        	$this->load->library('upload',$config);

        	if(!$this->upload->do_upload('soal_ujian'))
        	{
        		echo 'soal & rps gagal diupload';
        	}else{
        		$soal_ujian=$this->upload->data('file_name');
        		$data['soal_ujian']=$soal_ujian;

        	}


			$_file=$this->db->get_where('tbl_pengajaran',['no_pengajaran' => $no_pengajaran])->row();
        	$_FILES['upload_rps']['name'];

        	if(!$this->upload->do_upload('upload_rps'))
        	{
        		echo 'soal & rps gagal diupload';
        	}else{
        		$upload_rps=$this->upload->data('file_name');
        		$data['upload_rps']=$upload_rps;
        	}
		$this->db->where('no_pengajaran', $no_pengajaran);
		if($this->db->update('tbl_pengajaran',$data)){
        unlink("uploads/".$_file->soal_ujian);
        unlink("uploads/".$_file->upload_rps); }
	}



	public function get_file()
	{
		return $this->db->get('tbl_pengajaran')->result();

	}

}
 



?>