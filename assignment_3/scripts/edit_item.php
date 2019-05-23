<?php
    if(isset($_POST['article_id'])){
        $articles = file_get_contents('../data/articles.json');
        $article_array = json_decode($articles, true);

        foreach($article_array as $key => $value){
            if($value['id'] == $_POST['article_id']){
                $article_array[$key]['date'] = time();
                $article_array[$key]['title'] = $_POST['title'];
                $article_array[$key]['article'] = $_POST['article'];
            }
        }

        print_r($article_array);

        $articles = fopen('../data/articles.json', 'w'); 
        fwrite($articles, json_encode($article_array, JSON_PRETTY_PRINT)); 
        fclose($articles);

        header('Location: ../');
        die();
    }else{
        echo 'editing failed';
    }
?>