<?php

namespace App\Livewire\Menu;

use App\Livewire\Forms\MenuForm;
use App\Models\Menu;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Actions extends Component
{
    use WithFileUploads;

    public MenuForm $form;
    public $photo;
    public $show = false;
    #[On('createMenu')] //broadcast 
    public function createMenu()
    {
        $this->show = true;
    }

    #[On('editMenu')] //broadcast 
    public function editMenu(Menu $menu)
    {
        $this->form->setMenu($menu);
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.menu.actions', [
            'types' => Menu::$types
        ]);
    }
}
