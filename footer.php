<?php if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}
?>
<style>
	footer {
		float: left;
		clear: none;
		position: relative;
	}
</style>
<footer>
  <br>
  <p align="center">
  <a href="index.php">Queens College Incubator</a> &copy; <?php echo date("Y"); ?></p>
</footer>
