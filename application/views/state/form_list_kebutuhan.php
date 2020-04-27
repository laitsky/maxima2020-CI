<div class="container">
	<form action="formListKebutuhan" method="POST" id="list-kebutuhan-form" class="pt-3">
		<div class="form-group">
			<label for="nama_ukm">Nama UKM/Media Kampus</label>
			<input type="text" class="form-control" id="nama_ukm" name="nama_ukm">
			<?= form_error('nama_ukm', '<small class="form-text text-danger">', '</small>'); ?>
		</div>
		<div class="form-group">
			<label for="nama_pj">Nama Penanggungjawab:</label>
            <input type="text" class="form-control" id="nama_pj" name="nama_pj">
            <?= form_error('nama_pj', '<small class="form-text text-danger">', '</small>'); ?>
		</div>
		<div class="form-group">
			<label for="contact_pj">Contact Penanggungjawab (no telp):</label>
            <input type="text" class="form-control" id="contact_pj" name="contact_pj">
            <?= form_error('contact_pj', '<small class="form-text text-danger">', '</small>'); ?>
		</div>
		<div class="form-group">
			<label for="deskripsi_kegiatan">Kegiatan yang akan dilakukan:</label>
            <input type="text" class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan">
            <?= form_error('nama_ukm', '<small class="form-text text-danger">', '</small>'); ?>
		</div>
		<div class="form-group">
			<label for="waktu">Waktu yang dibutuhkan untuk melakukan kegiatan:</label>
			<input type="number" class="form-control" id="waktu" name="waktu">
		</div>
		<div class="form-group">
			<label for="ruangan">Ruangan yang biasa digunakan UKM/Media Kampus:</label>
			<input type="text" class="form-control" id="ruangan" name="ruangan">
		</div>
		<div class="form-group">
			<label for="kuota">Jumlah kuota peserta (bila ada):</label>
			<input type="number" class="form-control" id="kuota" name="kuota">
		</div>
		<hr>
		<h3>Perlengkapan yang dibutuhkan oleh UKM/Media Kampus</h3>
		<div class="form-group">
			<label for="jml_meja">Meja</label>
			<input type="number" class="form-control" id="jml_meja" name="jml_meja">
		</div>
		<div class="form-group">
			<label for="jml_kursi">Kursi</label>
			<input type="number" class="form-control" id="jml_kursi" name="jml_kursi">
		</div>
		<div class="form-group">
			<label for="jml_kabelroll">Kabel Roll</label>
			<input type="number" class="form-control" id="jml_kabelroll" name="jml_kabelroll">
		</div>
		<div class="form-group">
			<label for="jml_mic">Microphone</label>
			<input type="number" class="form-control" id="jml_mic" name="jml_mic">
		</div>
		<div class="form-group">
			<label for="jml_soundsystem">Sound System</label>
			<input type="number" class="form-control" id="jml_mic" name="jml_soundsystem">
		</div>
		<div class="form-group">
			<label for="jml_layar">Layar</label>
			<input type="number" class="form-control" id="jml_layar" name="jml_layar">
		</div>
		<div class="form-group">
			<label for="jml_proyektor">Proyektor</label>
			<input type="number" class="form-control" id="jml_proyektor" name="jml_proyektor">
		</div>
		<div class="form-group">
			<label for="jml_pc">PC</label>
			<input type="number" class="form-control" id="jml_pc" name="jml_pc">
		</div>
		<hr>
		<div class="form-group">
			<label for="perlengkapan_peserta">Perlengkapan Peserta</label>
			<input type="text" class="form-control" id="perlengkapan_peserta" name="perlengkapan_peserta">
		</div>
		<button class="btn btn-block btn-primary my-3" name="submit">Submit</button>
	</form>
</div>
