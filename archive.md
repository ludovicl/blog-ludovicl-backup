---
layout: page
title: Blog Archive
permalink: /archive/
banner_image: sample-banner-image-3.jpg
---
<script type = "text/javascript" >
	var domainroot="{{ site.domain }}"
	function Gsitesearch(curobj){
		curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
	}
</script>

<form action="http://www.google.com/search" method="get" onsubmit="Gsitesearch(this)" _lpchecked="1">
	<p class="search">Rechercher sur {{ site.domain }} :<br>
	<input name="q" type="hidden" class="texta" value="site: {{ site.domain }}">
	<input name="qfront" type="text" style="width: 180px; text-size: 12px; height: 14px;"> </p>
</form>
<div>
  {% for post in site.posts %}
    {% capture currentyear %}{{post.date | date: "%Y"}}{% endcapture %}
    {% if currentyear != year %}
      {% unless forloop.first %}
      </ul>
      {% endunless %}
      <h5>{{ currentyear }}</h5>
      <ul>
      {% capture year %}{{currentyear}}{% endcapture %} 
    {% endif %}
    <li><a href="{{ post.url | prepend: site.baseurl }}">{{ post.title }}</a></li>
  {% endfor %}
</div>
