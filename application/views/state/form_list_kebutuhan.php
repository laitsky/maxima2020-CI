<div>
	<svg class="mxm-wave-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#F4224B" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,266.7C384,277,480,235,576,213.3C672,192,768,192,864,197.3C960,203,1056,213,1152,202.7C1248,192,1344,160,1392,144L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
	</svg>
</div>
<div id="form-list-state" class="container-fluid">
	<div class="container">
		<h1 id="title-head">Form List Kebutuhan<br>STATE 2020</h1>
	</div>
	<div id="form-container" class="container pt-3 pb-3 rounded">
		<form action="formListKebutuhan" method="POST" id="list-kebutuhan-form">
			<?= $this->session->flashdata('message'); ?>
			<div class="form-group">
				<label for="nama_ukm">Nama UKM/Media Kampus</label>
				<select name="nama_ukm" id="nama_ukm" class="form-control">
					<option value="" selected disabled>Pilih UKM/Media Kampus</option>
					<?php
					$ukm_olahraga = array(
						"Lions Basket",
						"Lions Futsal",
						"Capoeira",
						"Lions Badminton",
						"Ultimatum Taekwondo",
						"Tenis Meja",
						"Lions Voli",
						"Spectre",
						"Fortius"
					);

					$ukm_seni = array(
						"Ultima Sonora",
						"Teater Katak",
						"Tracce",
						"J-Cafe",
						"Qorie",
						"Obscura",
						"Street Dance",
						"UMN Symphony Orchestra (USO)",
						"Ultima Toys",
						"Mufomic"
					);

					$ukm_sains = array(
						"Rencang",
						"Mapala UMN",
						"Game Development Club",
						"UESC",
						"UMN Programming Club"
					);

					$media_kampus = array(
						"UMN TV",
						"UMN Radio",
						"ULTIMAGZ",
						"UMN Juice",
						"Masterpiece"
					);
					?>
					<?php
					echo "<option value='' disabled>-- UKM Olahraga --</option>";
					foreach ($ukm_olahraga as $ukm1) {
						echo "<option value='$ukm1'>$ukm1</option>";
					};
					echo "<option value='' disabled>-- UKM Seni dan Budaya --</option>";
					foreach ($ukm_seni as $ukm2) {
						echo "<option value='$ukm2'>$ukm2</option>";
					};
					echo "<option value='' disabled>-- UKM Sains dan Sosial --</option>";
					foreach ($ukm_sains as $ukm3) {
						echo "<option value='$ukm3'>$ukm3</option>";
					};
					echo "<option value='' disabled>-- Media Kampus --</option>";
					foreach ($media_kampus as $ukm4) {
						echo "<option value='$ukm4'>$ukm4</option>";
					};
					?>
					<option value='' disabled>-- Kegiatan Kemahasiswaan & Lembaga Seni Otonom --</option>
					<option value="Skystar Ventures">Skystar Ventures</option>
				</select>
				<?= form_error('nama_ukm', '<small class="form-text text-danger">', '</small>'); ?>
			</div>
			<div class="form-row">
				<div class=" form-group col-sm-7">
					<label for="nama_pj">Nama Penanggungjawab:</label>
					<input type="text" class="form-control" id="nama_pj" name="nama_pj" value="<?= set_value('nama_pj'); ?>">
					<?= form_error('nama_pj', '<small class="form-text text-danger">', '</small>'); ?>
				</div>
				<div class="form-group col-sm-5">
					<label for="contact_pj">Contact Penanggungjawab (no telp):</label>
					<input type="text" class="form-control" id="contact_pj" name="contact_pj" value="<?= set_value('contact_pj'); ?>">
					<?= form_error('contact_pj', '<small class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="deskripsi_kegiatan">Kegiatan yang akan dilakukan saat STATE 2020:</label>
				<textarea type="text" class="form-control" style="resize:none;" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="5"></textarea>
				<?= form_error('deskripsi_kegiatan', '<small class="form-text text-danger">', '</small>'); ?>
			</div>
			<div class="form-group">
				<label for="waktu">Waktu yang dibutuhkan untuk melakukan kegiatan (dalam jam):</label>
				<input type="number" class="form-control" id="waktu" name="waktu" min="1.5" max="3" step="0.5" value="1.5">
			</div>
			<div class="form-group">
				<label for="ruangan">Ruangan yang biasa digunakan UKM/Media Kampus:</label>
				<input type="text" class="form-control" id="ruangan" name="ruangan" value="<?= set_value('ruangan'); ?>">
			</div>
			<div class="form-group">
				<label for="kuota">Jumlah kuota peserta (bila ada):</label>
				<input type="number" class="form-control" id="kuota" name="kuota">
			</div>
			<hr>
			<h3>Perlengkapan yang dibutuhkan oleh UKM/Media Kampus:</h3>
			<h6 class="mb-3" style="color: grey;">Jumlah peminjaman barang diberikan limit karena bergantung pada ketersediaan yang ada.</h6>
			<div class="form-row">
				<div class="form-group col-sm-3">
					<label for="jml_meja">Meja</label>
					<input type="number" class="form-control" id="jml_meja" name="jml_meja" min="0" max="4" value="0">
				</div>
				<div class="form-group col-sm-3">
					<label for="jml_kursi">Kursi</label>
					<input type="number" class="form-control" id="jml_kursi" name="jml_kursi" min="0" max="999" value="0">
				</div>
				<div class="form-group col-sm-3">
					<label for="jml_kabelroll">Kabel Roll</label>
					<input type="number" class="form-control" id="jml_kabelroll" name="jml_kabelroll" min="0" max="4" value="0">
				</div>
				<div class="form-group col-sm-3">
					<label for="jml_mic">Microphone</label>
					<input type="number" class="form-control" id="jml_mic" name="jml_mic" min="0" max="2" value="0">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-sm-3">
					<label for="jml_soundsystem">Sound System</label>
					<input type="number" class="form-control" id="jml_mic" name="jml_soundsystem" min="0" max="2" value="0">
				</div>
				<div class="form-group col-sm-3">
					<label for="jml_layar">Layar</label>
					<input type="number" class="form-control" id="jml_layar" name="jml_layar" min="0" max="2" value="0">
				</div>
				<div class="form-group col-sm-3">
					<label for="jml_proyektor">Proyektor</label>
					<input type="number" class="form-control" id="jml_proyektor" name="jml_proyektor" min="0" max="2" value="0">
				</div>
				<div class="form-group col-sm-3">
					<label for="jml_pc">PC</label>
					<input type="number" class="form-control" id="jml_pc" name="jml_pc" min="0" max="2" value="0">
				</div>
			</div>
			<hr class="mt-1">
			<div class="form-group">
				<label for="perlengkapan_peserta">Perlengkapan Peserta (pakaian, peralatan, dan perlengkapan)</label>
				<textarea type="text" class="form-control" style="resize:none;" id="perlengkapan_peserta" name="perlengkapan_peserta" rows="5"></textarea>
			</div>
			<button class="mxm-btn-yellow my-3 form-control" name="submit">Submit</button>
		</form>
	</div>
</div>