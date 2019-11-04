<?php
  require_once 'include/classes/dbActions.php';
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
    <h1 class="h2">Product Add</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a class="btn btn-outline-secondary" href="/index.php">To Product list</a>
    </div>
  </div>
  
  <?php
    if (isset($_POST['sku'])) {
      $dbAct = new dbActions();
      $insert_result = $dbAct->addProduct();
      var_dump($insert_result);
      $header = 'Location: /?addProduct=';
      $header .= $insert_result;
      header($header);
    }
  ?>
 <form action="" method="post">
	  <div class="col-md-3 mb-3">  
      <label for="sku">SKU</label>
      <input type="text" class="form-control" name="sku" placeholder="SKU" required="">
      <div class="invalid-feedback">
        Please enter SKU.
      </div>
    </div>

		<div class="col-md-3 mb-3">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name" required="">
      <div class="invalid-feedback">
        Please enter Name.
      </div>
    </div>

		<div class="col-md-3 mb-3">
      <label for="price">Price</label>
      <input type="text" class="form-control" name="price" placeholder="100 $" required="">
      <div class="invalid-feedback">
        Please enter price.
      </div>
    </div>

		<div class="col-md-2 mb-3">
	    <label>Type Switcher</label>
			<select class="browser-default custom-select" id="switcher" name="switcher">
				<option value="disc">DVD disc</option>
				<option value="book">Book</option>
				<option value="furniture">Furniture</option>
			</select>
	  </div>
            
    <div class="col-md-3 mb-3" id="divid">
    </div>

    <div class="col-md-3 mb-3">
      <button type="submit" class="btn btn-sm btn-outline-secondary pl-5 pr-5 pt-2">
        <h6>Save<h6>
      </button>
    </div>
  </form>

  <script src="js/type_switcher.js"></script>
      
</body>
</html>
