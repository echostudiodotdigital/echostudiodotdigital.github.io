<?php
if (isset($_GET['_'])) {
	$selected_fruit = $_GET['_'];
} else {
	$selected_fruit = '';
}
?>
<style>
* { margin: 0; padding: 0 }
nav { position: fixed; top: 0; left: 0;
	width: 100vw; height: 30px; background-color: rgba(0, 0, 0, 0.4);
}
nav .menu { cursor:pointer; width: 100px; height: 30px; float: left}
</style>
<nav>
	<div class="menu" id="menu_home">HOME</div>
	<div class="menu" id="menu_about">ABOUT</div>
	<div class="menu" id="menu_work">WORK</div>
</nav>
<br><br><br>
<?php
switch($selected_fruit) {
	case "home":
		include "home.php";
		break;
	case "about":
		include "about.php";
		break;
	case "work":
		include "work.php";
		break;
	default:
		echo "your selection is not avail.";
}
?>
<script>
var menu_home = document.getElementById('menu_home');
var menu_about = document.getElementById('menu_about');
var menu_work = document.getElementById('menu_work');

menu_home.onclick = function() {
	location.replace('./?_=home');
}
menu_about.onclick = function() {
	location.replace('./?_=about');
}
menu_work.onclick = function() {
	location.replace('./?_=work');
}
</script>