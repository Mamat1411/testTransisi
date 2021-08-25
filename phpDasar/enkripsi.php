<?php
	function encrypt($input){
		$encryption = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	  
		$input = strtoupper($input);
		$singularInput = str_split($input);

		$plus = true;
		$encrypted = '';
		$x = 1;
		$tmp = 0;
		for ($i=0; $i < count($singularInput); $i++) { 
			$tmp = array_search($singularInput[$i], $encryption);
			if ($plus == true) {
				$encrypted .= $encryption[$tmp+$x];
				$plus = false;
			} else {
				$ne = $tmp-$x;
				if ($ne < 0) {
					$ne = count($encryption) + ($ne);
				}
				$encrypted .= $encryption[$ne];
				$plus = true;
			}
			$x++;
		}
	  return $encrypted;
	}
	echo encrypt('DFHKNQ');
?>