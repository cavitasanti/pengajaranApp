<div class="container">
	<div class="row mt-3">
		<div class="col-md-9">
			<div class="card">
			  	<div class="card-header">
			    <h2 class="mt-3">Form Tambah Data Pengajaran</h2>
				</div>
			  	<div class="card-body">
			  		<?php
			  		 if(validation_errors()): ?>
			  		<div class="alert alert-danger" role="alert">
					  <?= validation_errors(); ?>
					</div>
			  		<?php endif;?>
			  		<form action="<?= base_url('index.php/pengajaran/tambah') ?>" method="post" enctype="multipart/form-data">
			   		<div class="form-group">
				   		<label for="kode_mk">Kode Mata Kuliah</label>
				    	<input type="text" class="form-control" id="kode_mk" name="kode_mk" placeholder="Kode Mata Kuliah">
		 			</div>
			   		<div class="form-group">
				   		<label for="mata_kuliah">Mata Kuliah</label>
				    	<input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah">
		 			</div>
		 			<div class="form-group">
				   		<label for="semester">Semester</label>
				    	<input type="number" class="form-control" id="semester" name="semester" placeholder="Semester">
		 			</div>
		 			<div class="form-group">
				   		<label for="bobot_sks">Bobot SKS</label>
						    <select class="form-control" id="bobot_sks" name="bobot_sks">
						      <option selected></option>
						      <option value="2">2</option>
						      <option value="4">4</option>
						      <option value="6">6</option>
						      <option value="8">8</option>
						    </select>
		 			</div>
   					<hr size="50px">
		 			<div class="form-group">
				   		<label for="nama_dosen">Nama Dosen</label>
				    	<input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Nama Dosen">
		 			</div>
		 			  <div class="form-group">
					    <label for="soal_ujian">File Soal Ujian</label>
					    <input type="file" class="form-control-file" id="soal_ujian" name="soal_ujian">
					  </div>
					  <div class="form-group">
					    <label for="upload_rps">File RPS </label>
					    <input type="file" class="form-control-file" id="upload_rps" name="upload_rps">
					  </div>
					  <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
				</form> 

			</div>
		
		</div>
	</div>
</div>