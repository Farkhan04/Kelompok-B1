<?php

class makanan
{

    protected $menu;

    function set_menu($new_menu)
    {
        $this->menu = $new_menu;
    }

    function get_menu()
    {
        return $this->menu;
    }
}

$makanan = new makanan();

$makanan->set_menu('bakso');

echo "Menu: " . $makanan->get_menu();

$makanan->set_menu('nasi goreng');
echo "<br> Menu baru: " . $makanan->get_menu();

?>