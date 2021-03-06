#!/bin/bash

# On remplace le chemin des fichiers en relative depuis la racine
sed -i '' -e 's/href="assets/href="\/assets/g' *.html
sed -i '' -e 's/src="assets/src="\/assets/g' *.html

# On supprime des balises du bloc description auteur qui ne servent a rien
sed -i '' -e 's/<p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">&nbsp;<\/p>//g' ./index.html
sed -i '' -e 's/<p class="mbr-author-desc mbr-fonts-style display-7">&nbsp;<\/p>//g' ./index.html

# On supprime les commentaires inutiles
sed -i '' -e '/Site made with Mobirise Website Builder/d' *.html
sed -i '' -e '/<meta name="generator"/d' *.html
sed -i '' -e 's/<section class="engine".*<\/a><\/section>//g' *.html
sed -i '' -e 's/if(!document.getElementById("top-1")).*)}//g' ./assets/theme/js/script.js

# On supprime les lignes vides
sed -i '' -e '/^ *$/d' ./index.html
sed -i '' -e '/^ *$/d' ./404.html

# Mise en forme du titre et ajoute d'un rectangle blanc sur la page index.html
sed -i '' -e 's/<div class="mbr-white col-md-10">/<div class="mbr-white col-md-8">/g' ./index.html
sed -i '' -e 's/<h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">/<h1 class="mbr-section-title mbr-bold pb-1 mbr-fonts-style display-1" style="height: auto;background-color: white;margin: auto;width: auto;border-style: solid;">/g' ./index.html

sed -i '' -e 's/<div class="mbr-white col-md-10">/<div class="mbr-white col-md-8">/g' ./404.html
sed -i '' -e 's/<h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">/<h1 class="mbr-section-title mbr-bold pb-1 mbr-fonts-style display-1" style="height: auto;background-color: white;margin: auto;width: auto;border-style: solid;">/g' ./404.html

