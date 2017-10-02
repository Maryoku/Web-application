<?php

class Content {
    public static $pages = array (
        1 => './assets/start.html',
        2 => './assets/about.html',
        3 => './assets/toplist.html'
    );

    public static function getContent($page) {
        return file_get_contents(self::$pages[$page]);
    }
}