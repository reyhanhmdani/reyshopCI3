<main class="container" role="main">
	<div class="row">
		<div class="col-md-8">
			<div class="card-header">
				Shipping address form
			</div>
			<div class="card-body">
				<form action="<?= base_url("checkout/create") ?>" method="POST">
					<div class="form-group">
						<label for="Name">Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter the recipient's name"
							   value="<?= $input->name ?>">
						<?= form_error('name') ?>
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<textarea name="address" id="" cols="30" rows="5" class="form-control"><?= $input->address ?></textarea>
						<?= form_error('address') ?>
					</div>
					<div class="form-group">
						<label for="city">Phone number</label>
						<input type="text" class="form-control" name="phone" placeholder="Enter the recipient's phone number"
							   value="<?= $input->phone ?>">
						<?= form_error('phone') ?>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>

		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Cart
						</div>
						<div class="card-body">
							<table class="table">
								<thead>
								<tr>
									<th class="">Product</th>
									<th class="">Quantity</th>
									<th class="">Price</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($cart as $row) : ?>
									<tr>
										<td><?= $row->title ?>?</td>
										<td><?= $row->qty ?></td>
										<td><?= number_format($row->price, 0, ',', '.') ?></td>
									</tr>
									<tr>
										<td colspan="2">Subtotal</td>
										<td>Rp<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
									</tr>
								<?php endforeach ?>
								</tbody>
								<tfoot>
								<tr>
									<th colspan="2">Total</th>
									<th>Rp<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</main>
