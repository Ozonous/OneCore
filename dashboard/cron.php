<?php
// for now this only fixes creator points
include "../incl/lib/connection.php";

$query = $db->prepare("UPDATE users SET creatorPoints = (SELECT COUNT(*) FROM levels WHERE userID = users.userId AND rated > 0) + (SELECT COUNT(*) FROM levels WHERE userID = users.userId AND featured > 0)");
$query->execute();
?>
