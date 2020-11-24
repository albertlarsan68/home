<?php
function ItemList(array $values) : string
    {
        return('
    
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Accueil - Localhost</title>
    </head>

    <body class="container">
        <header>
            <h1>Localhost</h1>
        </header>
        <p>Bienvenue sur la page d\'accueil de Localhost !</p>
        <ul>
            <li><a href="?action=goto&amp;location=albertlarsan">AlbertLarsan.test</a></li>
            <li><a href="?action=goto&amp;location=dashboard">Page d\'accueil XAMPP</a></li>
            <li><a href="?action=goto&amp;location=files">Gestion des fichiers</a></li>
            <li><a href="?action=goto&amp;location=phpmyadmin">phpMyAdmin</a></li>
        </ul>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
    </body>
</html>
');
    }