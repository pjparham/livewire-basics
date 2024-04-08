<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;

class EditProfile extends Component
{
    public User $user;

    #[Validate]
    public $username = '';
    public $bio = '';

    public $showSuccessIndicator = false;

    public function rules()
    {
        return [
            'username' => [
                'required',
                Rule::unique('users')->ignore($this->user),
            ]
        ];
    }

    public function mount()
    {
        $this->user = User::find(1);

        $this->username = $this->user->username;
        $this->bio = $this->user->bio;
    }

    public function save()
    {
        $this->validate();
        $this->user->username = $this->username;
        $this->user->bio = $this->bio;

        $this->user->save();
        //sleep(1);
        $this->showSuccessIndicator = true;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
