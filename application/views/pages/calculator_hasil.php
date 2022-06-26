<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-3">
				<div class="row g-0">
					<div class="col-md-4">
						<img src="/assets/img/logo/<?= $this->session->userdata('result_calc')['gol_darah_image'] ?>" class="img-fluid rounded-start" width="500">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Golongan Darah <?= $this->session->userdata('result_calc')['gol_darah_type'] ?></h5>
							<p class="card-text"><?= $this->session->userdata('result_calc')['gol_darah_note'] ?></p>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Jenis Kelamin: <strong> <?= $this->session->userdata('result_calc')['gender'] ?> </strong></li>
								<li class="list-group-item">Umur: <strong> <?= $this->session->userdata('result_calc')['umur'] ?> Tahun </strong></li>
								<li class="list-group-item">Tinggi: <strong> <?= $this->session->userdata('result_calc')['tinggi'] ?> CM </strong></li>
								<li class="list-group-item">Berat: <strong><?= $this->session->userdata('result_calc')['berat'] ?> KG</strong></li>
								<li class="list-group-item">Kebutuhan Kalori:<strong> <?= $this->session->userdata('result_calc')['kalori'] ?> Kal </strong></li>
							</ul>
						</div>
						<div class="card-footer"> 
							<a href="<?= base_url('notes')?>" type="button" class="btn btn-sm btn-block btn-success">Temukan makanan sesuai kalori mu</a>
						</div>
					</div>
				</div>
			</div>
			<a href="<?= base_url('calculator')?>?" class="btn btn-primary mb-5">Kembali</a>
		</div>
	</div>
</div>
