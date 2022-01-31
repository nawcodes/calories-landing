<div class="card shadow-sm p-3 mb-5 bg-body rounded border border-primary">
	<div class="card-header border-0">
		Hitung kalori
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-12">
				<form id="form">
					<div class="form-group">
						<label for="exampleFormControlSelect1">Jenis kelamin</label>
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
							<option value="perempuan">Perempuan</option>
							<option value="laki_laki">Laki-laki</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Umur</label>
						<input type="number" class="form-control" id="umur" min="0" name="umur" required="" step="any" type="number" value="0">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Tinggi</label>
						<input type="number" class="form-control" id="tinggi" min="0" name="tinggi" required="" step="any" value="0">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Berat</label>
						<input id="berat" min="0" name="berat" required="" step="any" type="number" value="0" class="form-control" id="exampleInputPassword1">
					</div>

					<div id="" class="form-group">
						<label>Pilih tingkat aktivitas anda:</label>
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
								<input name="tingkatAktivitas" id="tingkatAktivitas"  type="radio" value="2"> Saya melakukan aktivitas berat (melakukan gerak badan atau olahraga berat dan pekerjaan fisik) training)
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
