<?php
// very messy
include "../config/dashboard.php";
include "../config/site.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="../incl/css/elektrick.css"/>
<title>Dashboard</title>
</head>
<body>
<div class = "header">
<?php echo "<h1>$gdpsName</h1>"; ?>
</div>

<nav id="sidebar">
<br><br><br><br><br><br>
<ul>
<li>
<span class="logo"><?php echo "$gdpsName"?></span>
<button onclick=toggleSidebar() id="toggle-btn">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm280-80h280v-560H480v560Z"/></svg>
</button>
</li>
<li class="active">
<a href="index.php">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
<span>home</span></a>
</li>
<li>
<a href="leaderboard.php">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M160-200h160v-320H160v320Zm240 0h160v-560H400v560Zm240 0h160v-240H640v240ZM80-120v-480h240v-240h320v320h240v400H80Z"/></svg>
<span>Leaderboard</span></a>
</li>
</ul>
</nav>
<main>
<br><br><br><br><br><br>
<h1 style = "text-align: center;">
Hello, Guest!
</h1>
<?php
if ($container === true) {
   echo "<div class='container'>
      <h1 style='text-align: center;'>
        Hello!
      </h1>
      <p style='text-align: center;'>";
        echo "$content";
    echo "</p>
    </div>";
} else {
    echo "<h1 style='text-align: center;'>
    Hello, Guest!
    </h1>";
}
?>
</main>
<script type="text/javascript" src="../incl/js/dash.js"></script>
</body>
</html></body>
