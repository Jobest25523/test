<html>
<head>
    <title>Новости</title>
</head>
<body>
    <?php foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
      
        <p> В лесу родилась ёлочка 2 </p>
    </article>
    <?php endforeach; ?>
</body>
</html>
