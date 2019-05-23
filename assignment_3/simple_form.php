<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
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
        <?php
            $capital = 'Amsterdam';
            if (isset($_GET['name']) && isset($_GET['residence'])){
                $name = ucfirst($_GET['name']);
                $place = ucfirst($_GET['residence']);
        ?>
        <h1>Welcome <?php echo $name;?>!</h1>
        <?php
            if($place == $capital){
        ?>
        <p>You're from the capital of the Netherlands!</p>
        <?php 
            }else{ 
        ?>
        <p>You're from <?php echo $place;} ?></p>
        <?php
            }
        ?>

        <form method='get' action='simple_form.php'>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name='name' class="form-control" id="name" aria-describedby="emailHelp" placeholder="Your name">
            </div>
            <label for="residence">Place/ Residence</label>
            <input type="text" name='residence' class="form-control" id="residence" placeholder="Place/ Residence">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>