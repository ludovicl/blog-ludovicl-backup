<?php

class spxprism extends plxPlugin {

	/**
	 * Constructeur de la classe
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @authors	Stephane F
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# add shorcode
		$this->setParam('spxshortcodes_shortcode', '1', 'string');

		# droits pour accéder à la page config.php du plugin
		$this->setConfigProfil(PROFIL_ADMIN);

		$this->addHook('ThemeEndHead', 'ThemeEndHead');

	}

	/**
	 * Méthode qui ajoute les déclarations pour la coloration syntaxique dans la partie <head>
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function ThemeEndHead() {

			echo '
<link href="'.PLX_PLUGINS.'spxprism/prism.css" rel="stylesheet" />			
<script src="'.PLX_PLUGINS.'spxprism/prism.js"></script>

			';

	}

}
?>
