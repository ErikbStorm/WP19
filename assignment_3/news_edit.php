<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'News',
    'items' => Array(
        'News' => '/WP19/assignment_3/index.php',
        'Add news item' => '/WP19/assignment_3/news_add.php',
        'Leap Year' => '/WP19/assignment_3/leapyear.php',
        'Simple Form' => '/WP19/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';

if(isset($_POST['id'])){
    $json_file = file_get_contents('data/articles.json');
    $articles = json_decode($json_file, true);
    
    foreach($articles as $key => $value){
        if ($value['id'] == $_POST['id']){
            $article_id = $value['id'];
            $article_title = $value['title'];
            $article_txt = $value['article'];
        }
    }
?>
<div class="row">
    <div class="col-md-12">
        <form action="scripts/edit_item.php" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $article_title ?>"> </div>
            <div class="form-group">
                <label for="article">Article</label>
                <textarea class="form-control" id="article" name="article" rows="3"><?= $article_txt ?></textarea>
            </div>
            <input type="hidden" name="article_id" value="<?= $article_id ?>" />
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php
}else{
    echo "No article selected!";
}

include __DIR__ . '/tpl/body_end.php';
?>