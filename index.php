<?php include "connection.php"; ?>
<!doctype html>
<html lang="en">
    <head>
        <title>Uploading Image</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <style>
            .progress {width: 400px; height: 35px; position: relative}
            span#progress {display: block; height: 100%; background-color: #0F58E8}
            span#num {
                position: absolute;
                top: 7px;
                left: calc(50% - 75px);
                right: calc(50% - 75px);
                color: #FFF;
                text-align: center;
                font-weight: bold; 
            }
        </style>
    </head>
    <body>
        
        <section class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="custom-file">
                        <input type="file" name="image" id="imgInp" class="custom-file-input" aria-describedby="fileHelpId">
                        <span class="custom-file-control"> Select file</span>
                    </label>
                </div>
                <button type="button" class="btn btn-dark" id="btn" >Upload</button>
            </form>
            <div class="progress">
                <span id="progress" ></span> <span id="num"></span>
            </div>
            <div id="fileHelpId" class="form-text text-muted"></div>
        </section>

        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>