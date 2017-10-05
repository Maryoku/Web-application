<?php

define('DEFAULT_CONTENT_FILE', './assets/index.html');

class Page {
	
    public static $items = array (
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
	
    public static function getContent($item) {
		$file = self::$items[$item]['link'];
		
		if ((array_key_exists($item, self::$items)) && (file_exists($file))) {
            return file_get_contents($file);
		}
		else return file_get_contents(DEFAULT_CONTENT_FILE);
    }
}