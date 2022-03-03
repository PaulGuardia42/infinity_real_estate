#!/usr/bin/env bash

cd /c/wamp64/www/infinity_real_estate

DATE=$(date)

git add .
git commit -m "changes made on $DATE"
git push