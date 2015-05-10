#!/bin/sh

NOW=$(date +"%m-%d-%Y")
cd /var/www/vhosts/ludovicl.fr/httpdocs

git add -A
git commit -m "Blog backup from $NOW"
git push
