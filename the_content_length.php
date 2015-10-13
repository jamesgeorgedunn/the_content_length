<?php
	// Adjust the length of the WordPress content you would like to show
	// the_content_length(360, "...");
	function the_content_length($length, $trail = false) {
		$theContent = apply_filters("the_content", get_the_content());
		$theContent = str_replace("]]>", "]]&gt;", $theContent);
		
		if(strlen($theContent) < $length) {
			echo $theContent;
		} else {
			// Checks to see if there's a value for $trail
			if(!empty($trail)) {
				echo trim(substr($theContent, 0, $length)) . $trail;
			} else {
				echo trim(substr($theContent, 0, $length)) . "...";
			}
		}
	}
?>
