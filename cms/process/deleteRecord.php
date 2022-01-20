<?php
// add your includes for connections and functions
// make sure the path is correct
include('../../includes/conn.inc.php');
include('../../includes/functions.inc.php');
// sanitize user variables
$sFilmID = safeInt($_POST['filmID']);
// build prepare statement
$sql = "DELETE FROM movies WHERE filmID = :filmID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmID', $sFilmID, PDO::PARAM_INT);
$stmt->execute();
// redirect browser
header("Location: ../cms.php");
// make sure no other code executed
exit;
?>
