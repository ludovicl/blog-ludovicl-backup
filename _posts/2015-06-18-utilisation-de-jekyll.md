---
layout: post
title:  "Utilisation de Jekyll"
---
Utiliser Jekyll est assez simple, il me suffit d'écrire en [Markdown](http://daringfireball.net/projects/markdown/syntax) un  article et d'ensuite l'envoyer sur le serveur dans le bon dossier pour que le site se régénère automatiquement. 

L'entête de mon poste:
	
	---
	layout: post
	title:  "Utilisation de jekyll"
	---


Le nom de mon fichier contient la date
![Nom du tichier](/assets/images/2015-06/jekyll-post-name.png)

Pour insérer du code :

![Code source](/assets/images/2015-06/code_c_md.png)

me donne

{% highlight c %}
#include <stdio.h>
int main(void)
{
   print("Hello World");
}
{% endhighlight %}

Je reviendrai plus en détail sur mon utilisation de Jekyll dans quelques jours/semaines.