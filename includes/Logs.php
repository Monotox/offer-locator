<?php

class Logs {
	
	function exists($date) {

		return file_exists("logs/exec-" . $date);
	}

	function write($info) {

	}

	function read($previous, $new) {

	}
}