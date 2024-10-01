<main class="container" role="main">
	<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header">
					<span>Form User</span>
				</div>
			</div>
			<div class="card-body">
				<?= form_open_multipart($form_action, ['method' => 'POST']) ?>
				<?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
				<div class="form-group">
					<label for="name">Name</label>
					<?= form_input('name', $input->name,
						['class' => 'form-control', 'required' => true, 'autofocus' => true, 'placeholder' => 'Enter Name']) ?>
					<?= form_error('name') ?>
					<small class="form-text text-danger">Name is required</small>
				</div>
				<div class="form-group">
					<label for="">E-Mail</label>
					<?= form_input(['type'  => 'email', 'name' => 'email', 'value' => $input->email,
									'class' => 'form-control', 'placeholder' => 'Enter Active Email', 'required' => true]) ?>
					<?= form_error('email') ?>
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<?= form_password('password', '',
						['class' => 'form-control', 'placeholder' => 'Enter a password of at least 8 characters']) ?>
					<?= form_error('password') ?>
				</div>
				<div class="form-group">
					<label for="">Role</label>
					<br>
					<div class="form-check form-check-inline">
						<?= form_radio(['name'    => 'role', 'value' => 'admin',
										'checked' => $input->role == 'admin' ? true : false, 'form-check-input']) ?>
						<label for="" class="form-check-label">Admin</label>
					</div>
					<div class="form-check form-check-inline">
						<?= form_radio(['name'    => 'role', 'value' => 'member',
										'checked' => $input->role == 'member' ? true : false, 'form-check-input']) ?>
						<label for="" class="form-check-label">Member</label>
					</div>
				</div>
				<div class="form-group">
					<label for="">Status</label>
					<br>
					<div class="form-check form-check-inline">
						<?= form_radio(['name'    => 'is_active', 'value' => 1,
										'checked' => $input->is_active == 1 ? true : false, 'form-check-input']) ?>
						<label for="" class="form-check-label">Active</label>
					</div>
					<div class="form-check form-check-inline">
						<?= form_radio(['name'    => 'is_active', 'value' => 0,
										'checked' => $input->is_active == 0 ? true : false, 'form-check-input']) ?>
						<label for="" class="form-check-label">Not Active</label>
					</div>
				</div>
				<div class="form-group">
					<label for="">Photo</label>
					<br>
					<?= form_upload('image') ?>
					<?php if ($this->session->flashdata('image_error')) : ?>
						<small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
					<?php endif ?>
					<?php if (isset($input->image)): ?>
						<img src="<?= base_url("/images/user/$input->image") ?>" alt="" height="150">
					<?php endif ?>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				<?= form_close() ?>
			</div>
		</div>
	</div>
	</div>
</main>
