<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class EditProfile extends Component
{
    public User $user;
    public $username = '';
    public $bio = '';

    public $showSuccessIndicator = false;

    public function mount()
    {
        $this->user = User::find(1);

        $this->username = $this->user->username;
        $this->bio = $this->user->bio;
    }

    public function save()
    {
        $this->user->username = $this->username;
        $this->user->bio = $this->bio;

        $this->user->save();
        sleep(1);
        $this->showSuccessIndicator = true;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
