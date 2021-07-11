<?php 

class WebMotors implements Crawler {

	protected $url;

	public function __construct($url) {
		$this->url = $url;
	}

	public function setHeader() {
		$opts = array('http' =>
		  array(
		    /* 'method'  => 'GET',
		    'user-agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
		    'referer' => 'https://www.altavw.com.br/',
		    'path' => '/api/search/car?url=https://www.webmotors.com.br/carros%2Fsp%2Fvolkswagen%2Ffox%2F16-mi-8v-flex-4p-manual%2Fde.2011%3Festadocidade%3DS%25C3%25A3o%2520Paulo%26tipoveiculo%3Dcarros%26anode%3D2011%26kmate%3D80000%26kmde%3D5000%26marca1%3DVOLKSWAGEN%26modelo1%3DFOX%26precoate%3D350000%26versao1%3D1.6%2520MI%25208V%2520FLEX%25204P%2520MANUAL%26marca2%3DVOLKSWAGEN%26modelo2%3DFOX%26versao2%3D1.6%2520MI%2520BLUEMOTION%25208V%2520FLEX%25204P%2520MANUAL%26marca3%3DVOLKSWAGEN%26modelo3%3DFOX%26versao3%3D1.6%2520MI%2520PRIME%25208V%2520FLEX%25204P%2520MANUAL%26o%3D4&actualPage=1&displayPerPage=24&order=4&showMenu=true&showCount=true&showBreadCrumb=true&testAB=false&returnUrl=false',
		    'authority' => 'www.webmotors.com.br',
		    'timeout' => 60 */
		  )
		);

		return $opts;
	}

	public function exec() {
		$result = file_get_contents($this->url, false, $this->setHeader());

		echo "<pre>";
		print_r(json_decode($result));
	}
}
?>