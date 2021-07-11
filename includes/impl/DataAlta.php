<?php

class DataAlta implements iData {

	protected $value;

	public function __construct($value) {
		$this->value = $value;
	}

	public function prepare() {

		$dom = new simple_html_dom();
		$dom->load($this->value);
		$v = $dom->find('a[data-car-manufacturer],',0);
		$dom = str_replace('\\', '', $dom);

		$infos = array('title' => $v->find('h2',0)->plaintext, 'infos' => $v->find('p',0)->plaintext, 'price' => $v->find('p',1)->plaintext);
		
		$fp = fopen('logs/date-' . date('Y-m-d') . '.txt', 'a+');
		fwrite($fp, json_encode($infos, TRUE));
		fclose($fp);
	}
}