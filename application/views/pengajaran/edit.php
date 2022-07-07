<div class="container">
	<div class="row mt-3">
		<div class="col-md-9">
			<div class="card">
			  	<div class="card-header">
			    <h2 class="mt-3">Form Edit Data Pengajaran</h2>
				</div>
			  	<div class="card-body">
			  		<?php if(validation_errors()): ?>
			  		<div class="alert alert-danger" role="alert">
					  <?= validation_errors(); ?>
					</div>
			  		<?php endif;?>
			  	<form action="" method="post" enctype="multipart/form-data">
					  <input type="hidden" name="id" value="<?= $tbl_pengajaran['no_pengajaran']; ?>">
			   		<div class="form-group">
				   		<label for="kode_mk">Kode Mata Kuliah</label>
				    	<input type="text" class="form-control" id="kode_mk" name="kode_mk" value="<?= $tbl_pengajaran['kode_mk']; ?>">
						<small class="form-text text-danger"><?= form_error ('kode_mk'); ?></small>
		 			</div>
					 <div class="form-group">
				   		<label for="mata_kuliah">Mata Kuliah</label>
				    	<input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" value="<?= $tbl_pengajaran['mata_kuliah']; ?>">
		 			</div>
		 			<div class="form-group">
				   		<label for="semester">Semester</label>
				    	<input type="number" class="form-control" id="semester" name="semester" value="<?= $tbl_pengajaran['semester']; ?>">
		 			</div>
		 			<div class="form-group">
				   		<label for="bobot_sks">Bobot SKS</label>
						    <select class="form-control" id="bobot_sks" name="bobot_sks" >
								<?php foreach($bobot_sks as $b) : ?>
									<?php if( $b == $tbl_pengajaran['bobot_sks'] ) : ?>
										<option value="<?= $b; ?>" selected><?= $b; ?></option>
										<?php else : ?>
											<option value="<?= $b; ?>"><?= $b; ?></option>
									<?php endif; ?>
							  	<?php endforeach; ?>
						    </select>
		 			</div>
      				<hr size="50px">
		 			<div class="form-group">
				   		<label for="jenis_soal">Nama Dosen</label>
				    	<input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?= $tbl_pengajaran['nama_dosen']; ?>">
		 			</div>
		 			  <div class="form-group">
					    <label for="soal_ujian">File Soal Ujian</label>
							<a href="<?= base_url('uploads/'.$tbl_pengajaran['soal_ujian'])?>" ><?= $tbl_pengajaran['soal_ujian']; ?></a>
							<input type="file" class="form-control-file" id="soal_ujian" name="soal_ujian" value="<?= $tbl_pengajaran['soal_ujian']; ?>">
					  </div>
					  <div class="form-group">
					    <label for="upload_rps">File RPS </label>
						<a href="<?= base_url('uploads/'.$tbl_pengajaran['upload_rps'])?>" class="dwn" ><?= $tbl_pengajaran['upload_rps']; ?></a>
					    <input type="file" class="form-control-file" id="upload_rps" name="upload_rps" value="<?= base_url('uploads/'.$tbl_pengajaran['upload_rps'])?>">
					  </div>
					  <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
					  <a href="<?php echo base_url(); ?>index.php/pengajaran/" class="btn btn-danger">Batal</a>
				</form> 
			  	</div>

				</div>
			</div>
		
		</div>
	</div>
</div>