<main class="container" role="main">
	<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-3">
			<?php $this->load->view('layouts/_menu') ?>
		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					Detail Order <?= $order->invoice ?>
					<div class="float-right">
						<?php $this->load->view('layouts/_status', ['status' => $order->status]) ?>
					</div>
				</div>
				<div class="card-body">
					<p>Date : <?= str_replace('-', '/', date('d-m-Y', strtotime($order->date))) ?></p>
					<p>Name : <?= $order->name ?></p>
					<p>Number : <?= $order->phone ?></p>
					<p>Address : <?= $order->address ?></p>
					<table class="table">
						<thead>
						<tr>
							<th>Product</th>
							<th class="text-center">Price</th>
							<th class="text-center">Quantity</th>
							<th class="text-center">SubTotal</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($order_detail as $row) : ?>
						<tr>
							<td>
								<p>
									<img src="<?= $row->image ? base_url("images/product/$row->image") :
										base_url("images/product/default.png") ?>" height="50"
										 alt=""><strong> Product Title</strong></p>
							</td>
							<td class="text-center"><?= number_format($row->price, 0, ',', '.') ?></td>
							<td class="text-center"><?= $row->qty ?></td>
							<td class="text-center"><?= number_format($row->subtotal, 0, ',', '.') ?></td>
						</tr>
						<?php endforeach ?>
						<tr>
							<td class="" colspan="3"><strong>Total :</strong></td>
							<td class="text-center"><strong><?= number_format(array_sum(array_column($order_detail, 'subtotal')),
										0, ',', '.') ?></strong></td>
						</tr>
						</tbody>
					</table>
				</div>
				<?php if ($order->status == 'waiting') : ?>
				<div class="card-footer">
					<a href="<?= base_url("/myorder/confirm/$order->invoice") ?>"  class="btn btn-success">Payment Confirmation</a>
				</div>
				<?php endif ?>
			</div>

		<?php if (isset($order_confirm)) : ?>
			<div class="row mb-3">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							Payment Confirmation
						</div>
						<div class="card-body">
							<p>No Account : <?= $order_confirm->account_number ?></p>
							<p>Name : <?= $order_confirm->account_name ?></p>
							<p>Nominal : <?= number_format($order_confirm->nominal, 0, ',', '.') ?></p>
							<p>Note : <?= $order_confirm->note ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<p>Poof Transfer :</p>
					<img src="<?= base_url("/images/confirm/$order_confirm->image") ?>" alt="" height="200">
				</div>
			</div>
		<?php endif ?>
		</div>
	</div>
</main>
