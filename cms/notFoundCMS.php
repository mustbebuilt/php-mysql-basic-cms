<?php
ini_set('display_errors', 1);
// add your include
include('../includes/conn.inc.php');
$sql= "SELECT * FROM movies";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Content Management System</title>
          <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
	
		
	<?php
	include('includes/nav.inc.php');
	?>


      <div class="page-header">
        <h1>Content Management System</h1>
      </div>
    
    <div class="row">
            <div class="col-md-12">
           	<h2 class="alert-danger">No Record Found</h2>
            </div>
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2018 mustbebuilt.co.uk</p>
      </div>
</footer>
<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
</body>
</html>