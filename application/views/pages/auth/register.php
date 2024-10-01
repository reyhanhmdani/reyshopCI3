<main class="container" role="main">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">
					Form Registration
				</div>
				<div class="card-body">
					<?= form_open('register', ['method' => 'POST']) ?>
					<div class="form-group">
						<label for="name">Name</label>
						<?= form_input('name', $input->name,
							['class' => 'form-control', 'placeholder' => 'Enter Name', 'required' => true, 'autofocus' => true]) ?>
						<?= form_error('name') ?>
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<?= form_input(['type'  => 'email', 'name' => 'email', 'value' => $input->email,
										'class' => 'form-control', 'placeholder' => 'Enter email', 'required' => true]) ?>
						<?= form_error('email') ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<?= form_password('password', '',
							['class' => 'form-control', 'placeholder' => 'Input 8 or more characters', 'required' => true]) ?>
						<?= form_error('password') ?>
					</div>
					<div class="form-group">
						<label for="">Confirmation Password</label>
						<?= form_password('password_confirmation', '',
							['class' => 'form-control', 'placeholder' => 'Confirmation Password']) ?>
						<?= form_error('password_confirmation') ?>
					</div>

					<button type="submit" class="btn btn-primary">Register</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</main>
