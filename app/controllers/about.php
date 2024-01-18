<?php


// require 'functions.php';

$title = 'My Blog :: About';

$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eius sit incidunt labore voluptatibus, deserunt a totam minus, non architecto assumenda alias quia tenetur error officiis tempora nulla vitae tempore!</p>
<p>Nulla doloribus aspernatur itaque magnam corrupti ut consequuntur est nisi aliquid minima architecto quisquam deserunt aliquam, voluptas sequi eaque deleniti animi accusamus possimus! Sapiente nulla expedita reiciendis, accusamus optio voluptatum?</p>
<p>Ipsam quam ea suscipit eveniet quisquam maxime quo officiis, quaerat laudantium, recusandae illo deserunt corporis ad aspernatur dicta sapiente? Mollitia, vitae. Dolores eaque quae, voluptatibus voluptate ullam odit similique facere.</p>';

$recent_posts = [
    1 => [
        'title'=> 'An item',
        'slug'=> lcfirst(str_replace(' ', '-', 'An item')),
    ],
    2 => [
        'title'=> 'A second item',
        'slug'=> lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    3 => [
        'title'=> 'A third item',
        'slug'=> lcfirst(str_replace(' ', '-', 'A third item')),
    ],
    4 => [
        'title'=> 'A fourth item',
        'slug'=> lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],
    5 => [
        'title'=> 'And a fifth one',
        'slug'=> lcfirst(str_replace(' ', '-', 'And a fifth one')),
    ],
];

// Подключение представления сайта
require_once '../app/views/about.tpl.php';