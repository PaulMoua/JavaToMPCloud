<?php include 'vue/header.php';?>
<?php include 'vue/navbar.php';?>
<?php
if (isset($_GET["projet"])){
	include 'vue/content.php';
}
if (isset($_GET["accueil"])){
	include 'vue/accueil.php';
}
if (isset($_GET["cv"])){
	include 'vue/cv.php';
}
if (isset($_GET["veille"])){
	include 'vue/ecole.php';
}
if (isset($_GET["contact"])){
	include 'vue/contact.php';
}



?>

<?php include 'vue/footer.php';?>
