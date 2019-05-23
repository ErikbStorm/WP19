<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Leap Year',
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
        <div>
            <?php
                if(isset($_POST['name']) || isset($_POST['age']) || isset($_POST['email']) || isset($_POST['residence'])){
                    $name = ucfirst(strtolower($_POST['name']));
                    $age = $_POST['age'];
                    $email = $_POST['email'];
                    $residence = $_POST['residence'];
            ?>
            <h1>Welcome, <?php echo $name;?></h1>
            <p>The next 5 leap years, this will be your age!</p>
            <?php
                if(ucfirst(strtolower($residence)) == 'Groningen'){
            ?>
                <p>Moi, you're from Groningen!</p>
            <?php
                }else{
            ?>
                <p>Nice, you're from <?php echo $residence;?></p>
            <?php
                }

            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Year</th>
                        <th scope="col">Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $final_age = $age+24;
                        $birth_day = 2019 - $age;
                        $leap_year = 2024;
                        $age = $leap_year - $birth_day;
                        for($age; $age <= $final_age; $age += 4){
                    ?>
                    <tr>
                        <td><?php echo $leap_year;?></td>
                        <td><?php echo $age;?></td>
                    </tr>
                    <?php 
                        $leap_year += 4;
                        } 
                    ?>
                </tbody>
            </table>
            <?php
                }
            ?>
        </div>
        <form method='post' action='leapyear.php'>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name='name' class="form-control" id="name" aria-describedby="emailHelp" placeholder="Your name" required>
                <div class="valid-feedback">Great name!</div>
                <div class="invalid-feedback">Please fill in a valid name!</div>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name='age' class="form-control" id="age" placeholder="Your Age" required>
                <div class="valid-feedback">Valid age!</div>
                <div class="invalid-feedback">Please only use numbers!</div>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your email" required>
                <div class="valid-feedback">Valid email!</div>
                <div class="invalid-feedback">Please fill in a valid email (e.g test@test.com)</div>
            </div>
            <div class="form-group">
                <label for="residence">Place/ Residence</label>
                <input type="text" name='residence' class="form-control" id="residence" placeholder="Place/ Residence" required>
                <div class="valid-feedback">Valid Residence!</div>
                <div class="invalid-feedback">Please enter a valid residence name!</div>
            </div>
            <div id="submit_button" class="btn btn-primary">Submit!</div>
        </form>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>