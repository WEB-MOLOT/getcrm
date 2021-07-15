<?php

namespace App\Http\Livewire;

use App\Mail\PasswordChangedMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

        Mail::to(auth()->user()->email)->send(new PasswordChangedMail());
    }
}
