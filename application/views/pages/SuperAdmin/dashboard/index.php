<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
	$this->load->view('dist/_partials/header', $data);
?>
	<!-- Main Content -->
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1>Dashboard</h1>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card card-statistic-1">
						<div class="card-icon bg-primary">
							<i class="far fa-user"></i>
						</div>
						<div class="card-wrap">
							<div class="card-header">
								<h4>Jumlah Pasien</h4>
							</div>
							<div class="card-body">
								10
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card card-statistic-1">
						<div class="card-icon bg-danger">
							<i class="far fa-newspaper"></i>
						</div>
						<div class="card-wrap">
							<div class="card-header">
								<h4>Jumlah Karyawan</h4>
							</div>
							<div class="card-body">
								42
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card card-statistic-1">
						<div class="card-icon bg-warning">
							<i class="far fa-file"></i>
						</div>
						<div class="card-wrap">
							<div class="card-header">
								<h4>Jumlah Layanan</h4>
							</div>
							<div class="card-body">
								1,201
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card card-statistic-1">
						<div class="card-icon bg-success">
							<i class="fas fa-circle"></i>
						</div>
						<div class="card-wrap">
							<div class="card-header">
								<h4>Laporan Keuangan</h4>
							</div>
							<div class="card-body">
								47
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    </div>
<?php $this->load->view('dist/_partials/footer'); ?>