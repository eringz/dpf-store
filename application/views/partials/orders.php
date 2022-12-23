<div id="orders-div">
<?php
	foreach($orders as $order){
?>
	<div class="order-div">
		<form  action="/orders/destroy/<?=$order['id']; ?>" method="POST">
			<h2><?= $order['id']; ?></h2>
			<input type="submit" class="remove-btn" value="X">
		</form>
		<form class="update-order-form" action="/orders/update/<?=$order['id']; ?>" method="post">
			<textarea name="description" id="" cols="35" rows="5"><?= $order['description']; ?></textarea>
		</form>
	</div>
<?php
	}
?>
</div>