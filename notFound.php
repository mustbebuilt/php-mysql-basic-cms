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
</body>
</html>