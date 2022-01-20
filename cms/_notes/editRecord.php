<?php
// add your includes for connections and functions
// make sure the path is correct
include '../../includes/conn.inc.php';
include '../../includes/functions.inc.php';
// sanitize user variables
$sFilmName = safeString($_POST['filmName']);
$sFilmDescription = safeString($_POST['filmDescription']);
$sFilmImage = safeString($_POST['filmImage']);
$sFilmPrice = safeFloat($_POST['filmPrice']);
$sFilmReview = safeInt($_POST['filmReview']);
$sFilmID = safeInt($_POST['filmID']);

// build prepare statement
$sql = "UPDATE movies SET filmName = :filmName, filmDescription = :filmDescription, filmImage = :filmImage, filmPrice = :filmPrice, filmReview = :filmReview WHERE filmID = :filmID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmName', $sFilmName, PDO::PARAM_STR);
$stmt->bindParam(':filmDescription', $sFilmDescription, PDO::PARAM_STR);
$stmt->bindParam(':filmImage', $sFilmImage, PDO::PARAM_STR); // use PARAM_STR although a number
$stmt->bindParam(':filmPrice', $sFilmPrice, PDO::PARAM_STR);
$stmt->bindParam(':filmReview', $sFilmReview, PDO::PARAM_INT);
$stmt->bindParam(':filmID', $sFilmID, PDO::PARAM_INT);
$stmt->execute();
$stmt->execute();

// redirect browser
header("Location: ../cms.php"); // make sure no other code executed exit;

// make sure no other code executed
exit;
