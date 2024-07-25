<?php

/**
 * @package Aquila
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php add_theme_support('title-tag') ?></title>
    <?php wp_head() ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
</head>

<body>
    <header class="navbar px-4">
        <div class="logo">
            <h4><a href="index.php" class="logo gradient-text">Comicon</a>
            </h4>
        </div>
        <ul class="nav">
            <li>
                <a href="/#" class="a-tag">
                    About Us
                </a>
            </li>
            <li>
                <a href="/#" class="a-tag">
                    Programs
                </a>
            </li>
            <li>
                <a href="/#" class="a-tag">
                    Events
                </a>
            </li>
            <li>
                <a href="/#" class="a-tag">
                    Media
                </a>
            </li>
            <li>
                <a href="/#" class="a-tag">
                    Comics
                </a>
            </li>

        </ul>
        <div class="auth">
            <button class="btn-1">Login</button>
        </div>
    </header>