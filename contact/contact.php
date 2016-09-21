<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/main_style.css">
        <style>
            #contact {
                text-align: center;
                font-size: 200%;
                font-weight: 700;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/navbar.php";
                include $path;
            ?>        
        </div>
        <div class="container">
             <p id="contact">
                J. Stainton <br>
                at Mintz Law <br>
                jstainton@mintzlaw.ca
             </p>
        </div>
    </body>
</html>
