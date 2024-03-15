<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Counter')]
class Counter extends Component
{

    public $count = 1;
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment($by){
        $this->count = $this->count + $by;
    }

    public function decrement(){
        $this->count--;
    }
}
