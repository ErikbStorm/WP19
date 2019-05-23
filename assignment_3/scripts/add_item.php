<?php
    if(isset($_POST['submit'])){
        $articles = file_get_contents('../data/articles.json');
        $article_array = json_decode($articles, true);

        $id = 0;

        foreach($article_array as $key => $value){
            $id++;
        }

        $new_article = array(
            "id" => $id,
            "date" => time(),
            "title" => $_POST['title'],
            "article" => $_POST['article']
        );

        array_push($article_array, $new_article);

        print_r($article_array);

        $articles = fopen('../data/articles.json', 'w'); 
        fwrite($articles, json_encode($article_array, JSON_PRETTY_PRINT)); 
        fclose($articles);

        header('Location: ../');
        die();
    }
?>