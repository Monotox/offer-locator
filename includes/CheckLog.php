<?php

class CheckLog {
	
	function exec ($date){
		return file_exists("logs/exec-" . $date);
	}
}