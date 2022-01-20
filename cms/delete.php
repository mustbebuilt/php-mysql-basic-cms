<?php
// add your includes for connections and functions
include('../includes/conn.inc.php');
include('../includes/functions.inc.php');
// make sure the path is correct
$filmID = $_GET['filmID'] ?? null;
$sFilmID = safeInt($filmID);
$sql= "SELECT * FROM movies WHERE filmID = :filmID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmID', $sFilmID, PDO::PARAM_INT); 
$stmt->execute();
$totalnoFilms = $stmt->rowCount();
$row = $stmt->fetchObject();
if($totalnoFilms === 0){
	header('Location: notFoundCMS.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Edit <?php echo $row->filmName; ?></title>
          <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">

	<?php
	include('includes/nav.inc.php');
	?>
	
      <div class="page-header">
        <h1>Edit <?php echo $row->filmName; ?></h1>
      </div>
    
    <div class="row">
            <div class="col-md-12 form-group">
            	<p>
                Are you sure you wish to delete <?php echo $row->filmName; ?>?
                </p>
          		<form name="form1" method="post" action="process/deleteRecord.php">
                	<!-- Add the filmID as a hidden field -->
					<input type="hidden" name="filmID" id="filmID" value="<?php echo $row->filmID; ?>">
					<p>
					<input type="submit" value="Delete" class="btn btn-danger">
					</p>
                	
					<p>
					<a href="cms.php" class="btn btn-success">Save</a>
					</p>
                    
                </form>
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