<?php
namespace Rochi88\Admin\Menus;

use Rochi88\Admin\Classes\MenuBuilder;

class AdminMenu extends MenuBuilder{

    public function getKey(){
        return $this->key;
    }

    public function getValue(){
        return $this->value;
    }
}
