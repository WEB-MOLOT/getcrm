<?php

namespace App\View\Components\Cabinet\Tabs;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Documents extends Component
{

    protected Collection $documents;

    public function __construct()
    {
        /** @var User $user */
        $user = auth()->user();

        $this->documents = $user->documents()->latest('id')->get();
    }

    public function render(): string
    {
        return view('components.cabinet.tabs.documents', [
            'documents' => $this->documents,
        ]);
    }
}
