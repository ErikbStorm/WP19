<!DOCTYPE html>
<html lang='en'>
    <head>
        <title><?php echo $page_title;?></title>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width,           initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel='stylesheet' href='css/styles.css'>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="application/javascript" src="js/main.js"></script>
        <script type="application/javascript" src="js/links.js"></script>
        <script type='application/javascript' src='https://code.jquery.com/jquery-3.1.0.js'></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php
                            foreach($navigation['items'] as $name => $link){
                        ?>
                        <a class="nav-item nav-link <?php if($navigation['active'] == $name){echo "active";}?>" href="<?php echo $link;?>"><?php echo $name ?></a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </header>
