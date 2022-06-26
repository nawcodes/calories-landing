<div class="row">
	<div class="col-lg-8">
		<div id="calories-note">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Data Table Makanan</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>NO</th>
									<th>Nama</th>
									<th>Berat (gr)</th>
									<th>Kalori</th>
									<th>Unit</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="data-content">
								<?php $no = 1; foreach ($food as $f) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= isset($f['nama']) ? $f['nama'] : '' ?></td>
										<td><?= isset($f['berat']) ? $f['berat'] : '' ?></td>
										<td><?= isset($f['kalori']) ? $f['kalori'] : '' ?></td>
										<td><?= isset($f['unit']) ? $f['unit']  : '' ?></td>
										<td><input type="checkbox" name="check-input" id="check-input" is-food="<?= $f['nama']?>" is-id="<?= $no++ ?>" is-kalori="<?= isset($f['kalori']) ? $f['kalori'] : '' ?>"></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Berat (gr)</th>
									<th>Kalori</th>
									<th>Unit</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="card">
			<div class="card-header">
				Kalkulator kalori
			</div>
			<div class="card-body">
				<ul class="list-group">
					<li class="list-group-item active" aria-current="true">Histori perhitungan kalori</li>
					<li class="list-group-item" aria-current="true">Histori hitung kalori: <strong><?= $this->session->userdata('result_calc') != null ? $this->session->userdata('result_calc')['kalori'] . ' Kalori' : '0 Kalori'  ?></strong></li>
					<li class="list-group-item" aria-current="true">Total hitung kalori makanan: <strong><span id="total-calories"></span> Kalori</strong> </li>
				</ul>
				<br>
				
			</div>
		</div>
	</div>
</div>
