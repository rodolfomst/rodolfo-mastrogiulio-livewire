<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    //! dichiarare gli attributi
    public $value = 0;

    //! metodo increment
    public function increment(){
        $this->value++;
    }

    public function decrement(){
        $this->value--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}    