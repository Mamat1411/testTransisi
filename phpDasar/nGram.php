<?php
	
	function nGram($input)
	{
		$pecahString = explode(' ', $input);

		// unigram
		$unigram = '';
		foreach ($pecahString as $pecahanString) {
			$unigram .= $pecahanString.', ';
		}
		$unigram = substr($unigram, 0, -2);

		// bigram
		$x = 0;
		$bigram = '';
		foreach ($pecahString as $pecahanString) {
			if ($x < 1) {
				$bigram .= $pecahanString.' ';
				$x++;
			} else {
				$bigram .= $pecahanString.', ';
				$x = 0;
			}
		}
		$bigram = substr($bigram, 0, -2);

		// trigram
		$y = 0;
		$trigram = '';
		foreach ($pecahString as $pecahanString) {
			if ($y < 2) {
				$trigram .= $pecahanString.' ';
				$y++;
			} else {
				$trigram .= $pecahanString.', ';
				$y = 0;
			}
		}
		$trigram = substr($trigram, 0, -2);


		$result = 'Unigram : '. $unigram . '<br>';
		$result .= 'Bigram : '. $bigram . '<br>';
		$result .= 'Trigram : '. $trigram;

		return $result;
	}

	echo nGram('Jakarta adalah ibukota negara Republik Indonesia');
?>