<?php
/**
 * Plugin shjs
 *
 * @package	SHJS
 * @version	1.1
 * @date	26/01/2014
 * @author	Richard Didier
 **/
class shjs extends plxPlugin {

	/**
	 * Constructeur de la classe shjs
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Richard Didier
	 **/
	public $pathShjs = NULL;
	public $inAdmin  = false;
	public function __construct($default_lang)
	{
		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Déclarations des hooks
		$this->addHook('ThemeEndHead', 'addSHJSHeader');
		$this->addHook('ThemeEndBody', 'addSHJSScript');
		$this->setConfigProfil(PROFIL_ADMIN);

		$this->addHook('AdminTopEndHead', 'addSHJSHeaderAdmin');	
//		$this->addHook('AdminFootEndBody', 'addSHJSScript');
	}
	public function addSHJSHeaderAdmin()
	{
		$this->pathShjs = PLX_PLUGINS.'shjs/';
		$this->inAdmin = true;
		$this->addSHJSHeader();
	}
	
	/**
	 * Méthode qui ajoute l'insertion du fichier javascript de shjs dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Richard Didier
	 **/	
	public function addSHJSHeader()
	{
		$themeSHJS = $this->getParam('style_shjs');
		if(!$this->inAdmin)
			$this->pathShjs = plxMotor::getInstance()->racine.PLX_PLUGINS.'shjs/';
		echo '<script type="text/javascript" src="', $this->pathShjs ,'sh_main.min.js"></script>';
		echo '<link type="text/css" rel="stylesheet" href="', $this->pathShjs, 'shx_main.min.css">';
		echo '<link type="text/css" rel="stylesheet" href="', $this->pathShjs;
		if(empty($themeSHJS))
			echo 'sh_style.min.css">';
		else
			echo 'css/', $themeSHJS,'">';
		if($this->inAdmin)
			echo '<script type="text/javascript" src="', $this->pathShjs ,'language/sh_php.min.js"></script>';
	}

	/**
	 * Méthode qui ajoute l'appel à la fonction javascript sh_highlightDocument de shjs a la fin du document
	 * charge automatiquement les fichier javascript de langage
	 *
	 * @return	stdio
	 * @author	Richard Didier
	 **/	
	public function addSHJSScript()
	{
		echo'<script type="text/javascript"> sh_highlightDocument("', $this->pathShjs, '", ".min.js"); </script>';
	}

}
?>
