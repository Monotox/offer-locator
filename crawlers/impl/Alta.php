<?php 

class Alta implements Crawler {

	protected $url;

	public function __construct($url) {
		$this->url = $url;
	}

	public function setHeader() {
		$opts = array('http' =>
		  array(
		    'method'  => 'GET',
		    'user-agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
		    'referer' => 'https://www.altavw.com.br/',
		    'path' => '/plugin_v2/jsonp/?u=https%3A%2F%2Fwww.carclick.com.br%2Fplugin_v2%2F532afbf56ee011a9bfb0747d%2Fadvanced%2Fresult%3Fq%3D%26price_from%3D%26price_to%3D35.000%252C00%26dealer%3D%26year_from%3D%26year_to%3D%26show_new%3D0%26show_all%3D0%26show_featured%3D0%26url_advanced%3D%2Fseminovos%26show_premium%3D0%26web_site_custom%3Ddefault%26show_dealers%3D0%26page_title%3DNavegue%20por%20nosso%20estoque%26show_cms_dealers%3D0%26filter_dealers%3D0&c=_0_5427998252531467',
		    'authority' => 'www.carclick.com.br',
		    'timeout' => 60
		  )
		);
		
		return stream_context_create($opts);
	}

	public function exec() {
		$result = file_get_contents($this->url, false, $this->setHeader());

		echo "<pre>";
		print_r($result);

		/*
			$xml = simplexml_import_dom(@DOMDocument::loadHTML($result), 'SimpleXMLIterator');
			$tree = new RecursiveTreeIterator($xml);

			foreach($tree as $element => $line) {
			    printf("%s <%s>\n", $tree->getPrefix(), $element);
			}
		*/
	}
}

?>