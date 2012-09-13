<div class="alert alert-error">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>A PHP Error was encountered</strong>
	<ul>
		<li>Severity: <?php echo $severity; ?></li>
		<li>Message:  <?php echo $message; ?></li>
		<li>Filename: <?php echo $filepath; ?></li>
		<li>Line Number: <?php echo $line; ?></li>
	</ul>
</div>