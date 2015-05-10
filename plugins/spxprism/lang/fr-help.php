<?php if(!defined('PLX_ROOT')) exit; ?>
<style type="text/css">
#spxprism_help img {
	margin:5px;
	border: 1px solid #999;
}
#spxprism_help p {
	margin-bottom:5px;
}
#spxprism_help pre {
	font-size:14px;
	border: 1px solid #999;
	padding: 20px;
	white-space: pre-wrap;
	word-wrap: break-word;
	background-color: #FFF;
}
#spxprism_help .red {color:red;}


#spxprism_help ul#tabnav {
	margin:25px 0 0 0;
	padding:0 0 20px 10px;
	border-bottom:1px solid #025b87
}
	#spxprism_help  ul#tabnav li {
		margin:0;
		padding:0;
		display:inline;
		list-style-type:none;
		float:left
	}
	#spxprism_help ul#tabnav a:link, ul#tabnav a:visited {
		line-height:14px;font-weight:bold;margin:0 10px 4px 10px;text-decoration:none;color:#0084c5
	}
	#spxprism_help ul#tabnav li.active a:link, ul#tabnav li.active a:visited, ul#tabnav a:hover {
		border-bottom:4px solid #025b87;padding-bottom:2px;background:#fff;color:#025b87
	}
	#spxprism_help ul#tabnav a:hover {
		color:#025b87
	}
#spxprism_help h3 {
margin: 12px 0px 7px 0px;
padding: 0px;
font-size: 18px;
color: #555;
}
#spxprism_help h4 {
margin: 12px 0px 7px 0px;
padding: 0px;
font-size: 15px;
color: #555;
}
#spxprism_help ul,
#spxprism_help ol {
  padding: 0;
  margin: 0 0 10px 25px;
  
}



#spxprism_help li {
  line-height: 20px;
}

#spxprism_help ul.unstyled,
#spxprism_help ol.unstyled {
  margin-left: 0;
  list-style: none;
}

#spxprism_help ul.inline,
#spxprism_help ol.inline {
  margin-left: 0;
  list-style: none;
}

#spxprism_help ul.inline > li,
#spxprism_help ol.inline > li {
  display: inline-block;
  *display: inline;
  padding-right: 5px;
  padding-left: 5px;
  *zoom: 1;
}
#spxprism_help li {background: url(../../plugins/spxdatas/img/list_arrow.png) no-repeat 0% 50%; padding: 0 0 0 16px;}

#spxprism_help p {
	
}
</style>
<div id="spxprism_help">
    <h2>Aide du plugin spxprism</h2>
    
<p>Ce plugin va vous permettre de <strong>d'afficher du code, css, php</strong> en coloration syntaxique dans les fichiers du thème, des articles, des pages statiques...</p>
    <p>Encore un outil de coloration syntaxique me direz-vous ! </p>
    <p>Il est vrai qu'on en trouve pas mal sur le Web : GeSHi (php), SyntaxHighlighter (JavaScript), Pygments (Python).<br />
    </p>
    <p>Mais Prism (JavaScript et CSS) apporte d'indéniables avantages par rapport à ces concurrents : <strong>il est léger, très simple d'utilisation, facile à styler et extensible par l'ajout de plugins</strong>. <br />
    De plus, il favorise l'utilisation d'une syntaxe HTML sémantiquement correcte : ce sont les éléments code qui sont utilisés pour repérer le code à mettre en évidence.</p>
    <p>Le plugin intègre déja des shorcodes pour un usage simple..</p>
    <p>Il suffit juste d'installer le plugin <strong>spxshortcodes</strong> &gt;= verson 1.2.</p>
  <p>Vous pouvez afficher  du code css, php, markup, clike. La syntaxe est la suivante :</p>
<pre>
[PHP]
Mon code ici
[/PHP]

[CSS]
Mon code ici
[/CSS]

[MARKUP]
Mon code ici
[/MARKUP]

[CLIKE]
Mon code ici
[/CLIKE]
    </pre>
    
    <p>Il est possible de commencer les numéros de ligne en précisant le numéro : </p>
   <pre>
[PHP datastart='50']
Mon code ici
[/PHP]
</pre>
<p>Il est possible de ne pas afficher les numéros des lignes de code : </p>
   <pre>
[PHP linenumbers='false']
Mon code ici
[/PHP]
</pre>
