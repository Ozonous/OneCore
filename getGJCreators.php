<?php
include "incl/lib/connection.php";
require_once "incl/lib/injectionlibpatch.php";

// check secret
if (!isset($_POST["secret"]) || $_POST["secret"] !== "Wmfd2893gb7") {
    exit("-1");
}

// initialize variables
$rank = 0;
$output = "";

// get the creators
$query = $db->prepare("SELECT userId, userName, stars, icon, color1, color2, creatorPoints FROM users WHERE creatorPoints > 0 ORDER BY creatorPoints DESC");
$query->execute();
$creators = $query->fetchAll();

// output
foreach ($creators as $creator) {
    $rank++;
    $output .= "1:".$creator["userName"].":2:".$creator["userId"].":3:".$creator["stars"].":6:".$rank.":8:".$creator["creatorPoints"].":9:".$creator["icon"].":10:".$creator["color1"].":11:".$creator["color2"]."|";
}
echo rtrim($output, "|");
?>
