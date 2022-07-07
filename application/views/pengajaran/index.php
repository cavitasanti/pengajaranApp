
	<div class="col-sm-9">
		<h3>Dokumentasi RPS</h3>
		<!-- <div class="row mt-3">
			<div class="col-md-12"> -->
				<a href="<?php echo base_url(); ?>index.php/pengajaran/tambah" class="btn btn-primary">Tambah Data
					Pengajaran</a>
			<!-- </div> -->
		<!-- </div> -->
		<hr>
		</hr>
		<div class="container-fluid">
			<table class="table table-bordered" style="text-align: center;">
				<thead>
					<tr>
			      <th scope="col" style="text-align: center;">Kode Mata Kuliah</th>
			      <th scope="col" style="text-align: center;">Mata Kuliah</th>
			      <th scope="col" style="text-align: center;">Semester</th>
			      <th scope="col" style="text-align: center;">Bobot SKS</th>
			      <th scope="col" style="text-align: center;">Nama Dosen</th>
			      <th scope="col" style="text-align: center;">Soal Ujian</th>
			      <th scope="col" style="text-align: center;">RPS</th>
			      <th scope="col" style="text-align: center;">Opsi</th>
			    </tr>
			  	</thead>
			  	<tbody>
				<?php foreach($tbl_pengajaran as $pg): ?>
			    <tr>
			      <th style="text-align: center;"><?= $pg['kode_mk']; ?></th>
			      <td><?= $pg['mata_kuliah']; ?></td>
			      <td><?= $pg['semester']; ?></td>
			      <td><?= $pg['bobot_sks']; ?></td>
			      <td><?= $pg['nama_dosen']; ?></td>
			      <td><a href="<?= base_url('uploads/'.$pg['soal_ujian'])?>" ><?= $pg['soal_ujian']; ?></a></td>
			      <td>
			      	<a href="<?= base_url('uploads/'.$pg['upload_rps'])?>" class="dwn" ><span class="glyphicon glyphicon-download-alt"></a>
			      </td>
			      <td>
			      	<a href="<?php echo base_url(); ?>index.php/pengajaran/edit/<?= $pg['no_pengajaran']; ?>" class="glyphicon glyphicon-pencil"></a> 
			      	<a href="<?php echo base_url(); ?>index.php/pengajaran/delete/<?= $pg['no_pengajaran']; ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Anda yakin ingin menghapus data ini?');"></a>
			      </td>
			    </tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert"> Data
				Pengajaran<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.<button type="button"
					class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>
<?php endif; ?>
</div>