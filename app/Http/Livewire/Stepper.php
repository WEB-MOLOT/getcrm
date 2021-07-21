<?php

namespace App\Http\Livewire;

use App\Models\Dictionaries\Filter;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class Stepper extends Component
{
    public Collection $filters;

    public Collection $pickedValues;

    protected $listeners = [
        'sliderChanged' => 'toggleFilterValue',
    ];

    public function mount()
    {
        $this->pickedValues = collect();

        $this->filters = Filter::query()->oldest('order')->with('values')->get()->keyBy('id');
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.stepper');
    }

    public function toggleFilterValue(int $filterId, string $valueName): void
    {
        /** @var Collection $filter */
        $filter = $this->filters->firstWhere('id', '=', $filterId);

        $value = $filter->values->firstWhere('name', '=', $valueName);

        $this->pickedValues->put($filterId, $value?->id);
    }
}