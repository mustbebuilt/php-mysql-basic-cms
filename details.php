<?php
// add your include
include("includes/conn.inc.php");
include("includes/functions.inc.php");

// add query string logic

$sFilmID = safeInt($_GET['filmID']);

$sql= "SELECT * FROM movies WHERE filmID = :filmID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmID', $sFilmID, PDO::PARAM_INT); 
$stmt->execute();
$totalnoFilms = $stmt->rowCount();
$row = $stmt->fetchObject();

// add redirect condition
if($totalnoFilms === 0){
  header("Location: notFound.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title><?php echo $row->filmName;?></title>
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    
<nav class="navbar navbar-light bg-light">
		 <a class="navbar-brand" href="index.php">Home</a>
 	<form class="form-inline" method="post" action="cms/cms.php">

	<input type="text" class="form-control mr-sm-2" placeholder="login">
	<input type="password" class="form-control mr-sm-2" placeholder="password">

    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
  </form>	
		
</nav>
    
    
    
    
      <div class="page-header">
        <h1><?php echo $row->filmName;?> <small><?php echo $row->filmCertificate;?></small></h1>
      </div>
    
    <div class="row">
    	<div class="col-md-4">
					<?php 
					// add image here
          echo "<p><img src=\"images/$row->filmImage\" alt=\"Cover for $row->filmName\"></p>";
                    ?>
            </div>
            <div class="col-md-8">
					<?php
					// format the date output
					echo "<p>$row->filmDescription</p>";
					echo "<p>Release Date: $row->releaseDate</p>";
					echo "<p>Price: &pound;$row->filmPrice</p>";
                    ?>
            </div>
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2018 mustbebuilt.co.uk</p>
      </div>
</footer>
</body>
</html>