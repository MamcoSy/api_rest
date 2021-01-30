<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Methods:  GET');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

echo "# api_rest" >> README.md
git add .
git commit -m "first commit"
git branch -M master
git remote add origin https://github.com/MamcoSy/api_rest.git
git push -u origin master