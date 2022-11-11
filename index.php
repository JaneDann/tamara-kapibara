<?php
    $URL_LIST = [
        '/',
        '/photoshoots/photoshoot-1',
        '/photoshoots/photoshoot-2',
        '/photoshoots/photoshoot-3',
        '/photoshoots/photoshoot-4',
        '/photoshoots/photoshoot-5',
        '/photoshoots/photoshoot-6',
        '/photoshoots/photoshoot-7',
        '/photoshoots/photoshoot-8',
        '/photoshoots/photoshoot-9',
        '/photoshoots/photoshoot-10',
        '/photoshoots/photoshoot-11',
        '/photoshoots/photoshoot-12',
        '/photoshoots/photoshoot-13',
    ];

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (in_array($url, $URL_LIST)) {
        include_once('index.html');
    }
    else {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        include_once('index.html');
    }
?>