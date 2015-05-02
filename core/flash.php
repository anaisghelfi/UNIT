<?php 

	 function setFlash($message, $type='error') {
		$_SESSION['flash'] = array (
			'message' => $message,
			'type' => $type
		);
	}


