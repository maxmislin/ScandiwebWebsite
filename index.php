<?php
	//require_once 'include/classes/database.php';
	//require_once 'include/get_products.php';
	require_once 'include/classes/dbActions.php';
	$dbAct = new dbActions();
  $products = $dbAct->getProducts();
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Scandiweb website</title>
</head>
<body>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p-4 mb-3 border-bottom">
        <h1 class="h2">Product List</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          	<div class="btn-group mr-2">
            	<button form="cBox" type="submit" class="btn btn-sm btn-outline-secondary py-2 px-2">Mass Delete Action</button>
          	</div>
          <a class="btn btn-outline-secondary" href="/apply.php">Apply</a>
        </div>
  </div>
	<?php
		if (isset($_POST['id'])) {
			$dbAct = new dbActions();
			$delete_result = $dbAct->massDelete();
			$header = 'Location: /?massDelete=';
			$header .= $delete_result;
			header($header);
		}
	?>
	<form id="cBox" action="" method="post">
	<div class="d-flex flex-wrap">
		<?php
		foreach($products as $product):
		?>
		<div class="card mb-4 shadow-sm">
	  	<div class="card-body">
					<div align="right" class="checkbox-inline custom-checkbox">
						<input type="checkbox" name="id[]" value=<?=$product["id"]?>>
					</div>
	    	<ul class="list-unstyled mt-3 mb-4">
		      <li><?=$product["sku"]?></li>
		      <li><?=$product["name"]?></li>
		      <li><?=$product["price"]?></li>
		      <li><?=$product["type"]?></li>
				</ul>
	  	</div>
	  </div>
		<?php endforeach; ?>
	</div>
	</form>
</body>
</html>
