<?php
// add your includes for connections and functions
// make sure the paths are correct
include('../../includes/conn.inc.php');
include('../../includes/functions.inc.php');
// sanitize user variables
$sFilmName = safeString($_POST['filmName']); 
$sFilmDescription = safeString($_POST['filmDescription']); 
$sFilmImage = safeString($_POST['filmImage']); 
$sFilmPrice = safeFloat($_POST['filmPrice']); 
$sFilmReview = safeInt($_POST['filmReview']); 
// build prepare statement
$sql = "INSERT INTO movies(
    filmName, 
    filmDescription,
    filmImage,
    filmPrice,
    filmReview) 
    VALUES (
        :filmName, 
        :filmDescription,
        :filmImage,
        :filmPrice,
        :filmReview);";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmName', $sFilmName, PDO::PARAM_STR);
$stmt->bindParam(':filmDescription', $sFilmDescription, PDO::PARAM_STR);
$stmt->bindParam(':filmImage', $sFilmImage, PDO::PARAM_STR);
$stmt->bindParam(':filmPrice', $sFilmPrice, PDO::PARAM_STR);
$stmt->bindParam(':filmReview', $sFilmReview, PDO::PARAM_INT);
$stmt->execute();
// redirect browser
header("Location: ../cms.php");
// make sure no other code executed
exit;
?>
