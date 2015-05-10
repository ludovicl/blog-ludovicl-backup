<?php

class prism extends plxPlugin {

	public function __construct($default_lang) {
		parent::__construct($default_lang);
		$this->addHook('ThemeEndHead', 'addPrism');	
	}
	
	public function addPrism() {
		echo '<link rel="stylesheet" href="'.PLX_PLUGINS.'prism/prism.css" media="screen"/>'."\n";
		echo '<script type="text/javascript" src="'.PLX_PLUGINS.'prism/prism.js"></script>'."\n";
	}

}


?>