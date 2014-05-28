<?php

    namespace Builder;

    require_once 'NewsDirector.php';
    require_once 'RssNewsBuilder.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

    $builder = new RssNewsBuilder();
    $url = 'http://www.php.net/news.rss';

    $director = new NewsDirector($builder, $url);
    foreach($director->getNews() as $article) {
        printf('<li>[%s] <a href="%s">%s</a></li>', $article->getDate(), $article->getUrl(), $article->getTitle());
    }
?>

</body>
</html>
