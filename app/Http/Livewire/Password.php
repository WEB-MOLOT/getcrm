<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Password extends Component
{
    public string $password = '';
    public string $passwordConfirmation = '';
    public string $oldPassword = '';

    public function render()
    {
        return view('livewire.password');
    }

    public function save()
    {
        //$this->validate();

        auth()->user()->update([
            'password' => Hash::make($this->password),
        ]);

        session()->flash('success', 'Пароль обновлен.');
    }
}
