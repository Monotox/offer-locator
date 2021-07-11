<?php

class AccessData implements iData {

	protected $adapter;

	public function __construct(iData $obj) {
		$this->adapter = $obj;
	}

	public function prepare() {
		$this->adapter->prepare();
	}
}