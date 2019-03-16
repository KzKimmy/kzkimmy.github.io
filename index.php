<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YukiKaze Studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: hsl(0, 0%, 96%);
        }

        header {
            background-color: white;
            font-size: 0.8vw;
            padding: 20px;
            margin-bottom: 20px;
            padding-top: 50px;
            text-align: center;
        }

        .kz-content {
            margin-left: 25px;
            margin-right: 25px;
        }

        ::-moz-selection {
            background: #FF5E99;
            color: #fff;
            text-shadow: none;
        }

        ::selection {
            background: #FF5E99;
            color: #fff;
            text-shadow: none;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="title">
            Hello World
        </h1>
        <p class="subtitle">
            My first website with <strong>Bulma</strong>!
        </p>
    </header>
    <div class="container">
        <div class="kz-content">
            <article class="message is-warning">
                <div class="message-header">
                    <p><?php echo $r_ant_title?></p>
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="message-body">
                    <?php echo $r_ant_detail?>
                    <hr>
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-64x64">
                                <img src="<?php echo $r_admin_pic?>">
                            </figure>
                        </div>
                        <div class="media-content">
                            <?php echo $r_admin_name?><br>
                            <small><?php echo $r_ant_date?></small>
                        </div>
                    </article>
                </div>
            </article>
            <div class="columns">
                <div class="column is-two-thirds">
                    <div class="">
                    </div>
                </div>
                <div class="column">2</div>
            </div>
            <div class="">
                User online :
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                Copyright © 2017 - <?php echo date("Y"); ?>. Powered by YukiKaze Studio | All rights reserved.
            </p>
        </div>
    </footer>
    <script>
        (function () {
            var burger = document.querySelector('.burger');
            var nav = document.querySelector('#' + burger.dataset.target);

            burger.addEventListener('click', function () {
                burger.classList.toggle('is-active');
                nav.classList.toggle('is-active');
            });
        })();
    </script>
</body>

</html>