<?php

namespace App\Livewire\Forms;

use App\Models\Menu;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MenuForm extends Form
{
    public $name;
    public $price;
    public $type = 'coffe';
    public $desc;
    public ?Menu $menu;

    public function setMenu(Menu $menu)
    {
        $this->menu = $menu;

        $this->name = $menu->name;
        $this->price = $menu->price;
        $this->type = $menu->type;
        $this->desc = $menu->desc;
    }

    public function store()
    {
        $valid = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'type' => 'required',
            'desc' => ''
        ]);

        Menu::create($valid);
        $this->reset();
    }

    public function update()
    {
        $valid = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'type' => 'required',
            'desc' => ''
        ]);

        $this->menu->update($valid);
        $this->reset();
    }
}
