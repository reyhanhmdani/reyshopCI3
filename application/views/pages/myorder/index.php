<main class="container" role="main">
	<div class="row">
		<?php $this->load->view('layouts/_menu') ?>
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					Order list
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
						<tr>
							<th>Number</th>
							<th>Date</th>
							<th>Total</th>
							<th>Status</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($content as $row) : ?>
							<tr>
								<td>
									<a href="<?= base_url() ?>myorder/detail/<?= $row->invoice ?>"><strong><?= $row->invoice ?></strong></a>
								</td>
								<td><?= str_replace('-', '/', date('d-m-Y', strtotime($row->date))) ?></td>
								<td><?= number_format($row->total, 0, ',', '.') ?></td>
								<td>
									<?php $this->load->view('layouts/_status', ['status' => $row->status]) ?>
								</td>
							</tr>
						<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
