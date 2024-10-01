<main role="main" class="container">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Checkout Success
				</div>
				<div class="card-body">
					<h5>Number Order: <?= $content->invoice ?></h5>
					<p>Thanks for your order</p>
					<p>Please make a payment to be able to process it further by</p>
					<ol>
						<li>Make payment on account <strong>BCA 3209123123</strong> a/n PT. CIShop</li>
						<li>Include a description with the order number: <strong><?= $content->invoice ?></strong></li>
						<li>Total payment: <strong>Rp<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
					</ol>
					<p>If so, please send us the proof of transfer on the confirmation page or can
						<a href="<?= base_url("/myorder/detail/$content->invoice") ?>">Click here</a>!</p>
					<a href="<?= base_url('/') ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
</main>
