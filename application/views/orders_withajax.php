<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajax Ordertaker v2</title>
	<link rel="stylesheet" href="/assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){

			$(document).on('submit','form',function(){
				var form = $(this);
				$.post(form.attr('action'), $(this).serialize(), function(res){
					$('#orders-div').html(res);
				});
				return false;
			});

			$(document).on('change', '.update-order-form textarea', function(){
				$(this).parent().submit();
			});

			$('form').submit();
		});
	</script>
</head>
<body>
	<h1>Order Qeue</h1>
	<div id="orders-div">

	</div>

	<div class="add-orders-div">
		<form class="add-order-form" action="/orders/create" method="POST">
			<input type="text" id="add-order-input" name="description">
			<input type="submit" id="add-order-btn" value="Order">
		</form>
	</div>
</body>
</html>
