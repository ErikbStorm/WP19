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
?>
<div class="row">
    <div class="col-md-12">
        <div id='news_container'></div>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>