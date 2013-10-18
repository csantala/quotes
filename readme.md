In order to form an immaculate member of a flock of sheep one must, above all, be a sheep. - Albert Einstein

Quotations Library by Chris Santala 2010-now

setup
1. drop into localhost
2. execute rand_quote.php

codeigniter
1. place quotes.php and quotes.txt into application/library/quotations
2. call from controller like this:

	public function index() {

		// add to autoload, otherwise
		$this->load->library('quotations/quotes');

		$rand_quote = $this->quotes->rand_quote();

		$view_data = array(
			'rand_quote' => $rand_quote
		);

		$this->load->view('index_view', $view_data);
	}

demo
http://ablitica.com/logo