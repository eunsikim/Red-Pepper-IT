<?php
    $title = 'Home';

    echo $_SESSION['TWIG']->render('/views/home.html', [
        'title' => $title]) 
?>