$(function() {
    printLatestNews();
    window.setInterval(function() {
        printLatestNews();
    }, 4000);
});


function printLatestNews() {
    let request = $.post('scripts/read_latest_news.php', { 'call_now': true });
    let container = $('#news_container');
    request.done(function(data) {
        container.empty();
        container.append(data);
        $('.article_remove').on('click', function(){
            removeArticle(this);
        });
    });
}

function removeArticle(rm_button){
    let article_id = $(rm_button).attr('article-id'); 
    let rm_article = $.post("scripts/news_remove.php", { "article_id" : article_id }); 
    rm_article.done(function (data) {
         printLatestNews(); 
        });
}