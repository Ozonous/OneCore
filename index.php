<?php
include "config/site.php";
?>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=download,space_dashboard" /> 

<link rel="stylesheet" href="incl/css/elektrick.css">
</head>
<body>
<div class="header">
  <h1><?php echo $gdpsName; ?></h1>
</div>
<br><br><br>
<h1 style="text-align: center;">
Hello, guest!
</h1>
<br>
<?php
echo "<p style='text-align: center;'>$description</p>";
?>

<br><br><br>
<?php

if ($container === true) {
    echo "<div class='container'><h1>$content</h1></div><br>";
}
echo "<div class = 'flex'>";
if ($download === true) {
    echo "<a href = '$dlLink' style = '
text-decoration: none;'><div class='container2'><h1>
<span class='material-symbols-outlined'>
download
</span>
Download
</h1></div></a>";
}

if ($dashboard === true) {
    echo "<a href = 'dashboard/' style = '
text-decoration: none;'><div class='container2'><h1>
<span class='material-symbols-outlined'>
space_dashboard
</span>
Dashboard
</h1></div></a>";
}
echo "</div></body>";
?>
