<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajax Ordertaker v2</title>
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
	<h1>Order Qeue</h1>
	<div class="orders-div">
<?php
	foreach($orders as $order){
?>
	
		<div class="order-div">
			<form action="">
				<h2><?= $order['id']; ?></h2>
				<input type="submit" class="remove-btn" value="X">
			</form>
			<form action="">
				<textarea name="" id="" cols="35" rows="5"><?= $order['order']; ?></textarea>
				<input type="submit" class="update-btn" value="update">
			</form>
		</div>
<?php
	}
?>
	</div>


	<div class="orders-div">
		<form class="add-order-frm" action="">
			<input type="text" id="add-order-input" name="order">
			<input type="submit" id="add-order-btn" value="Order">
		</form>
	</div>
</body>
</html>
