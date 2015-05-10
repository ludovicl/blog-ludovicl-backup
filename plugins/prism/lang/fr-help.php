<?php if(!defined('PLX_ROOT')) exit; ?>

<style type="text/css">
	h1 {
		margin: 30px 0 15px 0; 
		font-size: 28px; 
		color: #555;
	}
	p {
		margin: 15px 0;
	}
	pre {
		font-size: 13px; 
		color: green;
	}
</style>
  

<h1>
	Aide pour le plugin Prism
</h1>

<p>
	Le plugin Prism vous permet de styliser la coloration syntaxique de vos codes sources sur votre site. 
	Ce plugin est basé sur le script <a href="http://prismjs.com/index.html" title="Prism">Prism</a>. 
</p>

<h1>
	Pour utiliser ce script
</h1>

<p>
	Pour styliser vos codes sources en fonction du langage que vous souhaitez afficher, il vous suffit d'ajouter une class CSS dans la balise &lt;code&gt;. Par exemple "language-markup" pour du HTML, "language-css" pour du CSS, ... Ce plugin fonctionne avec différents langages comme PHP, JAVA, JavaScript, C, C++, Python, SQL, ... 
</p>

<h1>
	Exemple
</h1>

<pre>
<?php echo plxUtils::strCheck('<pre><code class="language-markup">
  <div class="my-div">
    <p>
      ...
    </p>
  </div>
</code></pre>')
?>
</pre>

<pre>
<?php echo plxUtils::strCheck('<pre><code class="language-css">
  p {
    background-color: red
    color: white;
    margin: 0;
    padding: 10px;
  }
</code></pre>')
?>
</pre>
