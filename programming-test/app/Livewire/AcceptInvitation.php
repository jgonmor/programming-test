<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Invitation;

class AcceptInvitation extends Component
{

    public $token;
    public $name;
    public $password;
    public $password_confirmation;
    public $success;
    public $invitation;
    public $user;

    public function mount($token)
    {
        $this->token = $token;
        $this->invitation = Invitation::where('token', $this->token)->firstOrFail();
        $this->user = $this->invitation->user;
        $this->name = $this->user->name;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);


        $this->user->name = $this->name;
        $this->user->password = bcrypt($this->password);
        $this->user->status = 'active';

        $this->user->save();

        $this->invitation->status = 'confirmed';
        $this->invitation->save();

        $this->success = true;
    }


    public function render()
    {
        return view('livewire.accept-invitation')->layout('layouts.app');
    }
}
