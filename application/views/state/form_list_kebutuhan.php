<div class="container w-75">
<?= $this->session->flashdata('message'); ?>
	<form action="formListKebutuhan" method="POST" id="list-kebutuhan-form" class="pt-3">
		<div class="form-group">
			<label for="nama_ukm">Nama UKM/Media Kampus</label>
			<input type="text" class="form-control" id="nama_ukm" name="nama_ukm" value="<?= set_value('nama_ukm'); ?>">
			<?= form_error('nama_ukm', '<small class="form-text text-danger">', '</small>'); ?>
		</div>
		<div class="form-group row">
			<div class="col-sm-7">
				<label for="nama_pj">Nama Penanggungjawab:</label>
				<input type="text" class="form-control" id="nama_pj" name="nama_pj" value="<?= set_value('nama_pj'); ?>">
				<?= form_error('nama_pj', '<small class="form-text text-danger">', '</small>'); ?>
			</div>
			<div class="col-sm-5">
				<label for="contact_pj">Contact Penanggungjawab (no telp):</label>
				<input type="text" class="form-control" id="contact_pj" name="contact_pj" value="<?= set_value('contact_pj'); ?>">
				<?= form_error('contact_pj', '<small class="form-text text-danger">', '</small>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="deskripsi_kegiatan">Kegiatan yang akan dilakukan:</label>
			<textarea type="text" class="form-control" style="resize:none;" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="5"><?= set_value('deskripsi_kegiatan'); ?></textarea>
			<?= form_error('deskripsi_kegiatan', '<small class="form-text text-danger">', '</small>'); ?>
		</div>
		<div class="form-group">
			<label for="waktu">Waktu yang dibutuhkan untuk melakukan kegiatan (dalam jam):</label>
			<input type="number" class="form-control" id="waktu" name="waktu" min="1.5" max="3" step="0.5">
			<?= form_error('waktu', '<small class="form-text text-danger">', '</small>'); ?>
		</div>
		<div class="form-group">
			<label for="ruangan">Ruangan yang biasa digunakan UKM/Media Kampus:</label>
			<input type="text" class="form-control" id="ruangan" name="ruangan" value="<?= set_value('ruangan'); ?>">
		</div>
		<div class="form-group">
			<label for="kuota">Jumlah kuota peserta (bila ada):</label>
			<input type="number" class="form-control" id="kuota" name="kuota" value="<?= set_value('ruangan'); ?>">
		</div>
		<hr>
		<h3>Perlengkapan yang dibutuhkan oleh UKM/Media Kampus</h3>
		<div class="form-group row">
			<div class="col-sm-3">
				<label for="jml_meja">Meja</label>
				<input type="number" class="form-control" id="jml_meja" name="jml_meja" value="0">
			</div>
			<div class="col-sm-3">
				<label for="jml_kursi">Kursi</label>
				<input type="number" class="form-control" id="jml_kursi" name="jml_kursi" value="0">
			</div>
			<div class="col-sm-3">
				<label for="jml_kabelroll">Kabel Roll</label>
				<input type="number" class="form-control" id="jml_kabelroll" name="jml_kabelroll" value="0">
			</div>
			<div class="col-sm-3">
				<label for="jml_mic">Microphone</label>
				<input type="number" class="form-control" id="jml_mic" name="jml_mic" value="0">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-3">
				<label for="jml_soundsystem">Sound System</label>
				<input type="number" class="form-control" id="jml_mic" name="jml_soundsystem" value="0">
			</div>
			<div class="col-sm-3">
				<label for="jml_layar">Layar</label>
				<input type="number" class="form-control" id="jml_layar" name="jml_layar" value="0">
			</div>
			<div class="col-sm-3">
				<label for="jml_proyektor">Proyektor</label>
				<input type="number" class="form-control" id="jml_proyektor" name="jml_proyektor" value="0">
			</div>
			<div class="col-sm-3">
				<label for="jml_pc">PC</label>
				<input type="number" class="form-control" id="jml_pc" name="jml_pc" value="0">
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label for="perlengkapan_peserta">Perlengkapan yang perlu dibawa oleh peserta STATE 2020</label>
			<textarea type="text" class="form-control" style="resize:none;" id="perlengkapan_peserta" name="perlengkapan_peserta" rows="5"><?= set_value('perlengkapan_peserta'); ?></textarea>
			<?= form_error('perlengkapan_peserta', '<small class="form-text text-danger">', '</small>'); ?>
		</div>
		<button class="btn btn-block btn-primary my-3" name="submit">Submit</button>
	</form>
</div>