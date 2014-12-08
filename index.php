<?php

require_once __DIR__ . '/models/news.php';

$news = News_getAll(); 
echo "В лесу родилась ёлочка 2";


include 'view/index.php';
