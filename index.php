<?php
// add your includes for connection and functions

// ini_set("display_errors", 0);

include("includes/conn.inc.php");
include("includes/functions.inc.php");
// check query variables

$filmName = $_GET['filmName'] ?? null;
$sFilmName = safeString($filmName);

if(!is_null($filmName)){
	$searchTerm = "%".$sFilmName."%";
	$sql= "SELECT * FROM movies WHERE filmName LIKE :filmName";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':filmName', $searchTerm, PDO::PARAM_STR); 
	$stmt->execute();
	$totalnoFilms = $stmt->rowCount();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>PHP/MySQL Demo with CMS</title>
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
        <h1>PHP/MySQL CMS Demo</h1>
      </div>
	
	
		<form>
			<div class="form-group row">
				<label for="filmID" class="col-md-2 col-form-label">Search by Film Name:</label>
				<div class="col-md-2">
					<input type="text" class="form-control" id="filmName" name="filmName">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</div>
		</form>
	
	
    <div class="row">
            <div class="col-md-12">
					<?php
				if(!is_null($filmName)){
					if($totalnoFilms == 0){
						echo "<p class=\"alert-danger\">Sorry No Results.</p>";	
					}else{
						echo "<p class=\"alert-success\">We found $totalnoFilms film(s).</p>";	
						while($row = $stmt->fetchObject()){
								$timestampDate = strtotime($row->releaseDate);
								$displayDate = date("D d M Y", $timestampDate);
								echo "<p><a href=\"details.php?filmID=$row->filmID\">$row->filmName -  $row->filmCertificate - $displayDate</a></p>";	
							}
						}
					}else{
						echo "<p class=\"alert-danger\">Search Term Required.</p>";	
					}
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