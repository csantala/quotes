<?php

class Quotes {
	function rand_quote() {
		$quotes = file_get_contents('quotes.txt');
		preg_match_all('/"([^"]+)"/', $quotes, $quotesArray);
		$totalQuotes = count($quotesArray[0]) -1;
		return $quotesArray[1][rand(0, $totalQuotes)];
	}
}