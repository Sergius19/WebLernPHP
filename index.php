<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widt=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>My web site on PHP</title>
	</head>
	<body>
	
<?php require "blocks/header.php" ?>
	
<div class="container mt-">
<h3 class="mb-5">Our texts</h3>
    
	<div class="d-flex flex-wrap">
	<?php
	for($i = 0; $i < 5; $i++):
	?>
	<div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Text</h4>
      </div>
      <div class="card-body">
       <img src="img/<?php echo ($i + 1) ?>.jpg"  class="img-thumbnail">
		
        <ul class="list-unstyled mt-3 mb-4">
          <li>Best of our neture</li>
          <li>You can all</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">About</button>
      </div>
    </div>
	<?php endfor;	?>
	</div>
	<?php require "blocks/footer.php" ?>
	  
	</body>
	</html>