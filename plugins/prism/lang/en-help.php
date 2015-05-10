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
	Help for Prism plugin
</h1>

<p>
	Prism plugin allows you to stylize the syntax highlighting of your source code on your Website.
	This plugin is based on the script <a href="http://prismjs.com/index.html" title="Prism">Prism</a>. 
</p>

<h1>
	To use this script
</h1>

<p>
	To style your sources according to the language code you want to display, simply add a CSS class to the tag &lt;code&gt;. For example, "language-markup" for HTML, "language-css" for CSS, ... This plugin works with different languages ​​as PHP, JAVA, JavaScript, C, C++, Python, SQL, ... 
</p>

<h1>
	Example
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
