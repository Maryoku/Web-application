<?php
class Menu {
    public static $items = array(
        1 => "Start",
        2 => "About",
        3 => "Top list"
    );

    public static function renderMenu($item) {
        $menu = '<nav class="menu"><ul class="menu__list">';

        foreach (self::$items as $key => $value) {
            if($key == $item) {
                $menu = $menu.'<li class="menu__item menu__item_focused"><span>'."$value</span></li>";
            }
            else {
                $menu = $menu.'<li class="menu__item"><a class="menu__item-link"'."href=index.php?page=$key>$value</a></li>";
            }
        }

        $menu = $menu.'</ul></nav>';
        return $menu;
    }
}