<?php

require 'vendor/autoload.php';

echo $twig->render('home.html.twig', ['name' => $name]);