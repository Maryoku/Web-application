<?php

class Page {
    public static $items = array (
		0 => array( 'title' => '', 'link' => './assets/index.html'),
        1 => array( 'title' => 'Start', 'link' =>'./assets/start.html'),
        2 => array( 'title' => 'About', 'link' =>'./assets/about.html'),
        3 => array( 'title' => 'Top list', 'link' =>'./assets/toplist.html')
    );
	
	public static function renderMenu($item) {
        $menu = '<nav class="menu"><ul class="menu__list">';

        foreach (self::$items as $key => $value) {
            if($key == $item) {
			$menu = $menu.'<li class="menu__item menu__item_focused"><span>'."{$value['title']}</span></li>";
            }
            else {
                $menu = $menu.'<li class="menu__item"><a class="menu__item-link"'."href=index.php?page=$key>{$value['title']}</a></li>";
            }
        }

        $menu = $menu.'</ul></nav>';
        return $menu;
    }
	
    public static function getContent($item = 0) {
		if (array_key_exists($item, self::$items)) {
            return file_get_contents(self::$items[$item]['link']);
		}
		else return file_get_contents(self::$items[0]['link']);
    }
}