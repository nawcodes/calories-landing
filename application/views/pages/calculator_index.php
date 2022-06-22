<div class="card shadow-sm p-3 mb-5 bg-body rounded border border-primary">
	<?php if ($this->session->flashdata('error')) : ?>
		<div class="alert alert-primary" role="alert">
			<?= $this->session->flashdata('error') ?>
		</div>
	<?php endif; ?>
	<div class="card-header border-0">
		Hitung kalori
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-12">
				<form id="form" method="post" action="#">
					<div class="form-group">
						<label for="exampleFormControlSelect1">Golongan Darah</label>
						<select class="form-control" id="gol_darah" name="gol_darah">
							<option value="">----PILIH-----</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
						<?= form_error('gol_darah', '<span class="text-danger">', '</span>') ?>

					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Jenis kelamin</label>
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
							<option value="perempuan">Perempuan</option>
							<option value="laki_laki">Laki-laki</option>
						</select>
						<?= form_error('jenis_kelamin', '<span class="text-danger">', '</span>') ?>
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Umur (contoh: 17) <span class="text-danger">*</span></label>
						<input type="number" class="form-control" id="umur" name="umur" required="" step="any" type="number" value="<?= set_value('umur') ?>">
						<?= form_error('umur', '<span class="text-danger">', '</span>') ?>
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Tinggi (contoh: 150) <span class="text-danger">*</span></label>
						<input type="number" class="form-control" id="tinggi" name="tinggi" required="" step="any" value="<?= set_value('tinggi') ?>">
						<?= form_error('tinggi', '<span class="text-danger">', '</span>') ?>

					</div>
					<div class="mb-3">
						<label for="" class="form-label">Berat (contoh: 63)kg <span class="text-danger">*</span></label>
						<input id="berat" min="0" name="berat" required="" step="any" type="number" class="form-control" id="exampleInputPassword1" value="<?= set_value('berat') ?>">
						<?= form_error('berat', '<span class="text-danger">', '</span>') ?>

					</div>

					<div id="" class="form-group">
						<label>Pilih tingkat aktivitas anda: <span class="text-danger">*</span></label>
						<?= form_error('tingkatAktivitas', '<span class="text-danger">', '</span>') ?>
						<div class="radio">
							<label>
								<input name="tingkatAktivitas" id="tingkatAktivitas" type="radio" value="1.2" type="radio"> Saya hanya duduk duduk dan sedikit bergerak
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="tingkatAktivitas" id="tingkatAktivitas" type="radio" value="1.3"> Saya melakukan aktivitas sangat ringan(melakukan gerak badan atau olahraga ringan 1 s/d 3 kali seminggu )
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="tingkatAktivitas" id="tingkatAktivitas" type="radio" value="1.55"> Saya melakukan aktivitas ringan melakukan gerak badan atau olahraga 3 s/d 5 kali seminggu )
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="tingkatAktivitas" id="tingkatAktivitas" type="radio" value="1.7"> Saya melakukan aktivitas sedang (melakukan gerak badan atau olahraga 6 s/d 7 kali seminggu )
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="tingkatAktivitas" id="tingkatAktivitas" type="radio" value="2"> Saya melakukan aktivitas berat (melakukan gerak badan atau olahraga berat dan pekerjaan fisik) training)
							</label>
						</div>
					</div>
					<button type="submit" name="count" id="count" class="btn btn-primary">Hitung</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="result">

</div>
