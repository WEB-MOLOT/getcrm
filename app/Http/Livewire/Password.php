<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Password extends Component
{
    public string $password = '';

    public string $password_confirmation = '';

    public string $oldPassword = '';

    protected function rules(): array
    {
        return [
            'password' => 'required|string|min:8|confirmed',
            'oldPassword' => 'required|string|current_password',
        ];
    }

    protected array $validationAttributes = [
        'password' => 'Новый пароль',
        'oldPassword' => 'Старый пароль',
    ];

    public function render()
    {
        return view('livewire.password');
    }

    public function save(): void
    {
        $this->validate();

        auth()->user()->update([
            'password' => Hash::make($this->password),
        ]);

        session()->flash('success', 'Пароль обновлен.');
    }
}
