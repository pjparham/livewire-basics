<?php

namespace App\Livewire\Forms;

use App\Enums\Country;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProfileForm extends Form
{
    public User $user;

    #[Validate]
    public $username = '';
    public $bio = '';
    public $country;
    public $receive_emails = false;
    public $receive_updates = false;
    public $receive_offers = false;

    public function rules()
    {
        return [
            'username' => [
                'required',
                Rule::unique('users')->ignore($this->user),
            ],
            'country' => ['required']
        ];
    }

    public function setUser(User $user)
    {
        $this->user = User::find(1);

        $this->username = $this->user->username;
        $this->bio = $this->user->bio;
        $this->receive_emails = $this->user->receive_emails;
        $this->receive_updates = $this->user->receive_updates;
        $this->receive_offers = $this->user->receive_offers;
        $this->country = $this->user->country;

    }

    public function update()
    {
        $this->validate();

        $this->user->username = $this->username;
        $this->user->bio = $this->bio;
        $this->user->receive_emails = $this->receive_emails;
        $this->user->receive_updates = $this->receive_updates;
        $this->user->receive_offers = $this->receive_offers;
        $this->user->country = $this->country;

        $this->user->save();

    }
}
