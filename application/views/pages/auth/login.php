<main class="container" role="main">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Form Login</div>
				<div class="card-body">
					<?= form_open('login', ['method' => 'POST']) ?>
					<div class="form-group">
						<label for="email">Email address</label>
						<?= form_input(['type'  => 'email', 'name' => 'email', 'value' => $input->email,
										'class' => 'form-control', 'placeholder' => 'Enter email', 'required' => true, 'autofocus' => true]) ?>
						<?= form_error('email') ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<?= form_password('password', '',
							['class' => 'form-control', 'placeholder' => 'Input 8 or more characters', 'required' => true]) ?>
						<?= form_error('password') ?>
					</div>

					<button type="submit" class="btn btn-primary">Login</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</main>
