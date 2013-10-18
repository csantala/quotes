<?php
include "quotes.php";
$quotes = new Quotes;
echo $quotes->randomQuote();