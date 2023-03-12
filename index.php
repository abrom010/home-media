<h1>Home Media</h1>
<h2>Movies</h2>
<?php
foreach(glob('movies/*.mp4') as $filename) {
	echo "<a href=\"movie.php?movie=$filename\">" . str_replace('movies/', '', $filename) . "</a><br/>";
}
foreach(glob('movies/*.mkv') as $filename) {
	echo "<a href=\"movie.php?movie=$filename\">" . str_replace('movies/', '', $filename) . "</a><br/>";
}

?>

<style>
* {
	text-align: center;
}
</style>

