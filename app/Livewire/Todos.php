<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todo  List')]
class Todos extends Component
{
    public $todo = '';
    //a common structure is to set the default state for something here and populating it inside of the mount function
    public $todos = [];

    public function mount()
    {
        $this->todos = [
            'Take out trash',
            'Do dishes',
        ];
    }

    public function updated($property, $value)
    {
        $this->$property = strtoupper($value);
    }

    public function add()
    {
        if ($this->todo == '') {
            return;
        }
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
