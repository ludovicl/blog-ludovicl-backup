#!/bin/sh

NOW=$(date +"%m-%d-%Y")

git add -A
git commit -m "Blog backup from $NOW"
git push
