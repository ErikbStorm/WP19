<?php
    if(isset($_POST['call_now'])){
        $articles = file_get_contents('../data/articles.json');
        $article_array = json_decode($articles, true);
        $article_array = array_reverse($article_array);
        foreach($article_array as $key => $value){
?>
<div class="card text-center news-card" style='margin: 20px 0px'>
    <div class="card-header"><?php echo $value['title']; ?></div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $value['title']; ?></h5>
        <p class="card-text"><?php echo $value['article']; ?></p>
        <div class="row">
            <div class="col-md-6" style="text-align: right;">
                <form action="news_edit.php" method="POST"> <input type="hidden" name="id" value="<?php echo $value['id'];?>"> <button
                        type="submit" class="btn btn-light">Edit</button> </form>
            </div>
            <div class="col-md-6" style="text-align: left;"> <button class="btn btn-danger article_remove"
                    article-id="<?php echo $value['id'];?>">Remove</button> </div>
        </div>
    </div>
    <div class="card-footer text-muted"><?php echo strftime('%A %e %B %Y %H:%M', $value['date']); ?></div>
</div>

<?php
    }}
?>