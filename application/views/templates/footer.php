<?php
/**
 * Created by PhpStorm.
 * User: Hardner07@gmail.com
 * Date: 6/9/2019
 * Time: 8:41 PM
 */
?>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/main.js?v=1"></script>
<?php
	if (isset($scripts)) {
		$scripts = array_map('trim', explode(',', $scripts));
		foreach ($scripts as $script) {
			echo "<script src='" . base_url() . "assets/js/" . $script .".js?v=1'></script>";
		}
	}
?>
</body>
</html>
