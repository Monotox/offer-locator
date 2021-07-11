<?php

class AccessObject implements Crawler {

	protected $adapter;

	public function setHeader() {
		$opts = array('http' =>
		  array(
		    'method'  => 'GET',
		    'content' => $body,
		    'timeout' => 60
		  )
		);

		return stream_context_create($opts);
	}

	public function __construct(Crawler $obj) {
		$this->adapter = $obj;
	}

	public function exec() {
		$this->adapter->exec();
	}
}