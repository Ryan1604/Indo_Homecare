<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
	$this->load->view('dist/_partials/header', $data);
?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Data</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Data</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" class="needs-validation" action="<?php echo site_url('admin/client/store') ?>" novalidate="">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input id="name" type="text" class="form-control" name="name" tabindex="1" placeholder="Enter your name" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your name
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input id="nik" type="number" class="form-control" name="nik" tabindex="1" placeholder="Enter your NIK" required>
                                        <div class="invalid-feedback">
                                            Please fill in your NIK
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="Enter your Email" required>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">No Telepon</label>
                                        <input id="telp" type="number" class="form-control" name="telp" tabindex="1" placeholder="Enter your Phone Number" required>
                                        <div class="invalid-feedback">
                                            Please fill in your Phone Number
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" required=""></textarea>
                                        <div class="invalid-feedback">
                                            Please fill in your Address
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label">Status</div>
                                        <label class="custom-switch mt-2">
                                            <span class="custom-switch-description">Non Active &nbsp;</span>
                                            <input type="checkbox" name="status" 
                                                    value="1" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Active</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Add Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->load->view('dist/_partials/footer'); ?>