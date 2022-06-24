<ul class="navbar-nav bg-gradient-light sidebar sidebar-primary accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<img src="<?= base_url() ?>assets/img/logo/logo.png" alt="" width="30">
		</div>
		<div class="sidebar-brand-text mx-3">Our Calories</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Healthy Calculator
	</div>

	<!-- Nav Item - Pages Collapse Menu -->


	<!-- Nav Item - Charts -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('calculator') ?>">
			<i class="fas fa-calculator"></i> <span>hitung kalori</span></a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Healthy Guide
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Catatan Sehat</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('notes')?>">Makanan Sehat</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<!-- Divider -->

	<!-- Heading -->
	<!-- Nav Item - Tables -->


	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

	<!-- Sidebar Message -->


</ul>
