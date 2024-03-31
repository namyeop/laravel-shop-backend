<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Items extends Component
{
    public $size = '';
    public $color = '';

    public function check()
    {
        $this->dispatch('check', ['size' => $this->size, 'color' => $this->color]);
    }

    public function render()
    {
        return view('livewire.items');
    }
}
