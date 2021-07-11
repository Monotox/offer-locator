<?php

include 'static/defines.php';
include 'crawlers/Crawler.php';
include 'crawlers/impl/Alta.php';
include 'crawlers/impl/Webmotors.php';
include 'crawlers/connection/AccessObject.php';
include 'includes/CheckLog.php';

foreach ($targets as $key => $target) {

	foreach($target as $obj => $locale) {
		$dao = new $key($locale);
		$dao->exec();
	}
}

?>