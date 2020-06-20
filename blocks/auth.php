<?php
	setcookie('user', 'Yes', time() + 3600, '/');
	header('Location: /');
?>