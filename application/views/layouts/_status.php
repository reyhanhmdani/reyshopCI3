<?php

if ($status == 'waiting') {
	$badge_status = 'badge-primary';
	$status       = 'Waiting for payment';
}

if ($status == 'paid') {
	$badge_status = 'badge-secondary';
	$status       = 'Paid';
}

if ($status == 'delivered') {
	$badge_status = 'badge-success';
	$status       = 'Delivered';
}

if ($status == 'cancel') {
	$badge_status = 'badge-danger';
	$status       = 'Cancelled';
}
?>

<?php if ($status): ?>
	<span class="badge badge-pill <?= $badge_status ?>"><?= $status ?></span>
<?php endif ?>
