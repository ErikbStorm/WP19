<?php
    /* Header */
    $page_title = 'Webprogramming Assignment 2';
    $navigation = Array('active' => 'Links',
                    'items' => Array(
                    'Home' => '/WP19/assignment_2/index.php',
                    'Links' => '/WP19/assignment_2/links.php',
                    'News' => '/WP19/assignment_2/news.php',
                    'Future' => '/WP19/assignment_2/future.php')
                );
    include __DIR__. '/tpl/head.php';
    /* Body */
    include __DIR__ . '/tpl/body-start.php';
?>

<div class="col-md-12">
    <h1>This is the links page!</h1>
    <ul id='links'>
    </ul>
    <button type="button" class="btn btn-secondary" id='list_button'>Toggle List</button>
    <button type="button" class="btn btn-danger" id='delete_button'>Enable Delete Mode</button>
    <div class="input-group" style='width: 700px; padding-top: 10px;'>
        <input type="text" class="form-control" id='link_name' placeholder="Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <input type="text" class="form-control" id='link_url' placeholder="URL: e.g. https://www.youtube.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id='add-to-list_button'>Add to list</button>
        </div>
    </div>
</div>

<?php
    include __DIR__ . '/tpl/body-end.php';
    /* Footer */
    include __DIR__ . '/tpl/footer.php';
?>