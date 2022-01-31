<div class="col-lg-12">
	<?php foreach ($blood as $b) : ?>
		<div class="row d-flex justify-content-center">
			<div class="card mb-3 border border-primary" style="max-width: 100%">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="<?= base_url('assets/img/logo/') . $b['image'] ?>" width="350">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Golongan <strong class="text-danger"><?= $b['type'] ?></strong></h5>
							<p class="card-text"><?= $b['note'] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div>
