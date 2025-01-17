<main class="container" role="main">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header">
					<span>Form Product</span>
				</div>
				<div class="card-body">
					<?= form_open_multipart($form_action, ['method' => 'POST']) ?>
					<div class="form-group">
						<label for="">Product Name</label>
						<?= form_input('title', $input->title,
							['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'createSlug()', 'required' => true, 'autofocus' => true]) ?>
						<?= form_error('title') ?>
					</div>
					<div class="form-group">
						<label for="">Description</label>
						<?= form_textarea(['name' => 'description', 'value' => $input->description, 'row' => 4, 'class' => 'form-control']) ?>
						<?= form_error('description') ?>
					</div>
					<div class="form-group">
						<label for="">Price</label>
						<?= form_input(['type'  => 'number', 'name' => 'price', 'value' => $input->price,
										'class' => 'form-control', 'required' => true]) ?>
						<?= form_error('price') ?>
					</div>
					<div class="form-group">
						<label for="">Category</label>
						<?= form_dropdown('id_category', getDropdownList('category', ['id', 'title']), $input->id_category,
							['class' => 'form-control']) ?>
						<?= form_error('id_category') ?>
					</div>
					<div class="form-group">
						<label for="">Stock</label>
						<br>
						<div class="form-check form-check-inline">
							<?= form_radio(['name' => 'is_available', 'value' => 1, 'checked' => $input->is_available == 1 ? true : false,
								'form-check-input']) ?>
							<label for="" class="form-check-label">Available</label>
						</div>
						<div class="form-check form-check-inline">
							<?= form_radio(['name' => 'is_available', 'value' => 0, 'checked' => $input->is_available == 0 ? true : false,
								'form-check-input']) ?>
							<label class="form-check-label">Not Available</label>
						</div>
					</div>
					<div class="form-group">
						<label for="">Image Product</label>
						<br>
						<?= form_upload('image') ?>
						<?php if ($this->session->flashdata('image_error')) : ?>
							<small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
						<?php endif ?>
						<?php if ($input->image): ?>
							<img src="<?= base_url("/images/product/$input->image") ?>" alt="" height="150">
						<?php endif ?>
					</div>
					<div class="form-group">
						<label for="">Slug</label>
						<?= form_input('slug', $input->slug, ['class' => 'form-control', 'id' => 'slug', 'required' => true]) ?>
						<?= form_error('slug') ?>
					</div>
					<button type="submit" class="btn btn-primary">Save</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
</main>
