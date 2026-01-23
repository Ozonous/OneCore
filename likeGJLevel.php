<?php
// likeGJLevel.php
include "incl/lib/connection.php";

// check if secret exists (basically finding if they are accessing from gd or url)
if (!isset($_POST["secret"]) || $_POST["secret"] !== "Wmfd2893gb7") {
    exit("-1");
}

// level id
$levelID = $_POST["levelID"];

// add 1 to likes
$query = $db->prepare("UPDATE levels SET likes = likes + 1 WHERE levelID = :levelID");
$query->execute([":levelID" => $levelID]);

// return 1 to gd
echo "1";
?>
