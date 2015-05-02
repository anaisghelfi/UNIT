<?php 
	function cryptPass($pass) {
		define('PREFIX_SALT', 'prison');
  		define('SUFFIX_SALT', 'break');
		return md5(sha1(md5(sha1(sha1(sha1(md5('PREFIX_SALT'.$pass.'SUFFIX_SALT')))))));
	}
	
?>