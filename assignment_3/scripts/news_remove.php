<?php
    if(isset($_POST['article_id'])){
        $articles = file_get_contents('../data/articles.json');
        $article_array = json_decode($articles, true);

        foreach($article_array as $key => $value){
            if($value['id'] == $_POST['article_id']){
                unset($article_array[$key]);
            }
        }
        $articles = fopen('../data/articles.json', 'w'); 
        fwrite($articles, json_encode($article_array, JSON_PRETTY_PRINT)); 
        fclose($articles);
    }
?>