<?php
if (isset($header)) {
    echo $header;
}

?>
<!-- Page Loader -->
<div class="page-loader-wrapper">
	<div class="loader">
		<div class="preloader">
			<div class="spinner-layer pl-red">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>
		<p>Please wait...</p>
	</div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Top Bar -->
<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
			 aria-expanded="false"></a>
			<a href="javascript:void(0);" class="bars"></a>
			<a class="navbar-brand" href="<?php echo base_url('admin') ?>">B2M Admin</a>
		</div>
	</div>
</nav>
<!-- #Top Bar -->
<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<!-- User Info -->
		<div class="user-info">
			<div class="image">
				<img src="<?php echo base_url() ?>assets/images/user.jpg" width="48" height="48" alt="User" />
			</div>
			<div class="info-container">
				<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $this->session->userdata('username'); ?>
				</div>
				<div class="email">admin@admin.com</div>
				<div class="btn-group user-helper-dropdown">
					<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
					<ul class="dropdown-menu pull-right">
						<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url('admin/logout') ?>"><i class="material-icons">input</i>Sign Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- #User Info -->
		<!-- Menu -->
		<div class="menu">
			<ul class="list">
				<li class="header">MAIN NAVIGATION</li>
				<li class="<?php echo (strpos(current_url(),'admin') ? 'active':'') ?>">
					<a href="<?php echo base_url('admin')?>">
						<i class="material-icons">home</i>
						<span>Home</span>
					</a>
				</li>

				<li <?php echo (strpos(current_url(),'book') ? 'active':'') ?>>
					<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
						<i class="material-icons">book</i>
						<span>Book</span>
					</a>
					<ul class="ml-menu" style="display: none;">
						<li>
							<a href="<?php echo base_url('admin/book') ?>" class=" waves-effect waves-block">All Books</a>
						</li>
						<li>
							<a href="<?php echo base_url('admin/create') ?>" class=" waves-effect waves-block">Add New book</a>
						</li>
					</ul>
				</li>

			</ul>
		</div>
		<!-- #Menu -->
		<!-- Footer -->
		<div class="legal">
			<div class="copyright">
				&copy; 2019 <a href="javascript:void(0);">Designed By Samiul Islam</a>.
			</div>
			<div class="version">
				<b>Version: </b> 1.0.0
			</div>
		</div>
		<!-- #Footer -->
	</aside>
	<!-- #END# Left Sidebar -->
</section>

<?php

if (isset($dashboard)) {
    echo $dashboard;
}

if (isset($footer)) {
    echo $footer;
}
?>
