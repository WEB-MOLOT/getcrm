<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Subscribe extends Component
{
    public bool $hasSubscription;

    public ?string $subscribeEmail;

    protected User $user;

    protected array $rules = [
        'subscribeEmail' => 'email|nullable'
    ];

    protected array $validationAttributes = [
        'subscribeEmail' => 'Адрес для подписки',
    ];

    public function __construct($id = null)
    {
        $this->user = auth()->user();

        parent::__construct($id);
    }

    public function mount(): void
    {
        $this->hasSubscription = $this->user->hasSubscription();

        $this->subscribeEmail = $this->user->subscribe_email ?? null;

        if ($this->subscribeEmail === null) {
            $this->subscribeEmail = $this->user->email;
        }
    }

    public function updatedHasSubscription(): void
    {
        if ($this->hasSubscription && empty($this->subscribeEmail)) {
            $this->subscribeEmail = $this->user->email;
        }

        $this->user->update([
            'has_subscription' => $this->hasSubscription,
            'subscribe_email' => $this->subscribeEmail,
        ]);
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updatedSubscribeEmail(): void
    {
        $this->validateOnly('subscribeEmail');

        $this->user->update([
            'subscribe_email' => $this->subscribeEmail,
        ]);
    }

    public function render()
    {
        return view('livewire.subscribe');
    }
}
