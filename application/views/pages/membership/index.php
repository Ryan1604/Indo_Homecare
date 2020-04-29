<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('dist/_partials/header');
?>
	<!-- Main Content -->
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1>Data Membership</h1>
				<div class="section-header-breadcrumb">
					<div class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></div>
					<div class="breadcrumb-item">Membership</div>
				</div>
			</div>
			<div class="section-body">
				<a href="<?= base_url('admin/membership/create') ?>" class="btn btn-primary btn-s"><i class="fa fa-plus"></i> Add Data</a><br><br>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped" id="example">
										<thead>
											<tr>
												<th class="text-center">
													#
												</th>
												<th>Membership</th>
												<th>Price</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach($membership as $data) : ?>
											<tr>
												<td><?= $no++?></td>
												<td><?= $data->MEMBERSHIP_NAME?></td>
												<td>$<?= $data->PRICE?></td>
												<td>
													<a href="<?php echo base_url('admin/membership/edit/').$data->MEMBERSHIP_ID ?>" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
													<a href="<?php echo base_url('admin/membership/delete/').$data->MEMBERSHIP_ID ?>" class="btn btn-danger" onclick="javascript: return confirm('Are you sure want to Delete ?')" title="Delete"><i class="fa fa-trash"></i></a>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php $this->load->view('dist/_partials/footer'); ?>