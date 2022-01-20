<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Insert Film</title>
          <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">

	<?php
	include('includes/nav.inc.php');
	?>
	
      <div class="page-header">
        <h1>Insert Film</h1>
      </div>
    
            
      <form name="form1" method="post" action="process/insertRecord.php">
            <div class="form-group col-md-4">

                  	<label for="filmName">Film Title</label>
                    <input type="text" name="filmName" id="filmName"  class="form-control">
                  
           </div> 
           <div class="form-group col-md-4">      
                  
                    <label for="filmImage">Film Image</label>
                    <input type="text" name="filmImage" id="filmImage"  class="form-control">
                  
          </div> 
          <div class="form-group col-md-4">          
                 
                    <label for="filmPrice">Film Price</label>
                    <input type="text" name="filmPrice" id="filmPrice" class="form-control">
                  
           </div>
          <div class="form-group col-md-6">  
                  
                    <label for="filmDescription">Film Description</label>
                    <textarea name="filmDescription" id="filmDescription" class="form-control"  rows="5"></textarea>
                  
          </div> 
           
           <div class="form-group col-md-6">           
                  
                  <p class="myLabel">Star Rating</p>

			   <?php
			   
         // insert loop for star ratings
         
         $noStars = 5; 
         for($i=0;$i<=$noStars;$i++){ 
            echo "<div class=\"form-check-inline\">";
            echo "<label class=\"radio-inline\">";
            echo "<input type=\"radio\" name=\"filmReview\" value=\"$i\" >";
            echo "$i"; echo "</label>";
            echo "</div>";
         } ?>
			   
			   ?>
			   
                    
         	</div> 
           <div class="form-group col-md-12">             
                  <p>
                    <input type="submit" name="button" id="button" value="Add Film" class="btn btn-primary">
                  </p>
         </div>
</form>

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