<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfileForm;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use App\Models\User;

class EditProfile extends Component
{
    public ProfileForm $form;
    public $showSuccessIndicator = false;


    public function mount()
    {
        $user = User::find(1);
        $this->form->setUser($user);

    }

    public function save()
    {
        $this->form->update();

        sleep(1);

        $this->showSuccessIndicator = true;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
