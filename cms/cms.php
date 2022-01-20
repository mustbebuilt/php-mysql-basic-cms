<?php
// add your include
include('../includes/conn.inc.php');
include('../includes/functions.inc.php');

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
            <p><a href="insert.php" class="btn btn-success">Add New Film</a></p>
              <table class="table table-striped">
              		<thead>
                        <tr>
                            <th>Film</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>View</th>
                        </tr>
                    </thead>
					<?php 
					while($row = $stmt->fetchObject()){
						// amend with links to the relevant pages
								echo "<tr>";
								echo "<td>$row->filmName</td>";	
                				// echo "<td>Edit</td>";
                				// echo "<td>Delete</td>";
                        // echo "<td>View</td>";
                        echo "<td><a href=\"edit.php?filmID=$row->filmID\">Edit</a></td>";
                        echo "<td><a href=\"delete.php?filmID=$row->filmID\">Delete</a></td>";
                        echo "<td><a href=\"../details.php?filmID=$row->filmID\">View</a></td>";
								echo "</tr>";
					}
                    ?>
            </table>
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