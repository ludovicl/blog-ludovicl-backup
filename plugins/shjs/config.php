<?php if(!defined('PLX_ROOT')) exit; ?>
<?php
if(!empty($_POST)) {
	$plxPlugin->setParam('style_shjs', $_POST['style_shjs'], 'string');
	$plxPlugin->saveParams();
	header('Location: parametres_plugin.php?p=shjs');
	exit;
}

# On récupère la liste des thèmes mobiles
$aStyles[''] = $plxPlugin->getLang('L_NONE');
$files = plxGlob::getInstance(PLX_PLUGINS.'shjs/css');
if($styles = $files->query('/^sh_[a-z0-9-_\.\(\)]+$/i')) {
	foreach($styles as $k=>$v)
		$aStyles[$v]=$v;
}
?>

<h2><?php echo $plxPlugin->getInfo('title') ?></h2>

<form action="parametres_plugin.php?p=shjs" method="post">
	<fieldset class="withlabel">
		<legend><?php //$plxPlugin->lang('L_LEGEND') ?> </legend>
		<p class="field"><label for="id_style_shjs"><?php $plxPlugin->lang('L_SELECT_STYLE') ?>&nbsp;</label></p>
		<?php plxUtils::printSelect('style_shjs', $aStyles, $plxPlugin->getParam('style_shjs')); ?>
		<p><input type="submit" name="submit" value="<?php $plxPlugin->lang('L_SAVE') ?>" /></p>
	</fieldset>
</form>

<h2> <?php echo $plxPlugin->getLang('L_SAMPLE') ?></h2>

<pre class="sh_php">
<?php
echo <<<'TEST'
&lt?php
// PHP source SHJS  => &lt;pre class="sh_php"&gt;
class plxEncrypt {

	/**
	 * Méthode qui crypte le texte $plainText
	 *
	 * @param	plainText	chaîne à crypter
	 * @return	string	chaîne cryptée
	 * @author	Stephane F.
	 **/
	private static function base64url_encode($plainText) {

		$base64 = base64_encode($plainText);
		$base64url = strtr($base64, '+/=', '-_,');
		return $base64url;
	}

	/**
	 * Méthode qui décrypte le texte $plainText
	 *
	 * @param	plainText	chaîne à décrypter
	 * @return	string	chaîne décryptée
	 * @author	Stephane F.
	 **/
	private static function base64url_decode($plainText) {

		$base64url = strtr($plainText, '-_,', '+/=');
		$base64 = base64_decode($base64url);
		return $base64;
	}

	public static function encryptId($int, $class='') {

		return plxEncrypt::base64url_encode($int.'*'.substr(sha1($class.$int.ENCRYPTION_KEY), 0, 6));
	}

	public static function decryptId($int, $class='') {

		$parts = explode('*', plxEncrypt::base64url_decode($int));
		if(sizeof($parts) != 2)
			return 0;
		return substr(sha1($class.$parts[0].ENCRYPTION_KEY), 0, 6) === $parts[1] ? $parts[0] : 0;
	}

}
?&gt;
TEST;
?>
</pre>

<script type="text/javascript"> sh_highlightDocument(); </script>
