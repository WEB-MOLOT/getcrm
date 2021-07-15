<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public string $name;

    public string $firm;

    public ?string $position = null;

    public string $email;

    public ?string $phones = null;

    protected User $user;

    protected array $validationAttributes = [
        'name' => 'ФИО',
        'firm' => 'Организация',
        'position' => 'Должность',
        'email' => 'E-mail',
        'phones' => 'Телефон',
    ];

    protected function rules(): array
    {
        return [
            'name' => 'required|string|min:6',
            'firm' => 'required|string|min:6',
            'position' => 'nullable|string|min:6',
            'email' => 'required|string|email|min:6|unique:users,email,' . auth()->id(),
            'phones' => 'nullable|string|min:6',
        ];
    }

    public function __construct($id = null)
    {
        $this->user = auth()->user();

        parent::__construct($id);
    }

    public function mount()
    {
        $this->name = $this->user->name;
        $this->firm = $this->user->firm;
        $this->position = $this->user->position;
        $this->email = $this->user->email;
        $this->phones = $this->user->phones;
    }

    public function render()
    {
        return view('livewire.profile');
    }

    public function save()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'firm' => $this->firm,
            'phones' => $this->phones,
            'position' => $this->position,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Профиль обновлен.');
    }
}
