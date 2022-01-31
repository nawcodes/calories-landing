<div id="calories-note">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Berat (gr)</th>
							<th>Kalori</th>
							<th>Unit</th>
						</tr>
					</thead>
					<tbody id="data-content">
						<?php foreach($food as $f) : ?>
							<tr>
								<td><?= isset($f['nama']) ? $f['nama'] : '' ?></td>
								<td><?= isset($f['kalori']) ? $f['kalori'] : '' ?></td>
								<td><?= isset($f['berat']) ? $f['berat'] : '' ?></td>
								<td><?= isset($f['unit']) ? $f['unit']  : '' ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Nama</th>
							<th>Berat (gr)</th>
							<th>Kalori</th>
							<th>Unit</th>
						</tr>
					</tfoot>

				</table>
			</div>
		</div>
	</div>
</div>
