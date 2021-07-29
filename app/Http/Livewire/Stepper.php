<?php

namespace App\Http\Livewire;

use App\Models\Dictionaries\Filter;
use App\Models\Solution;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class Stepper extends Component
{
    public Collection $filters;

    public Collection $pickedValues;

    public bool $hasSolution = false;

    public int $timestamp;


    protected Collection $solutions;

    protected Collection $functionalities;

    protected Collection $pickedSolutions;

    protected Collection $pickedFunctionalities;

    protected $listeners = [
        'sliderChanged' => 'toggleFilterValue',
    ];

    public function mount()
    {
        $this->filters = Filter::query()->oldest('order')->with('values')->get()->keyBy('id');

        $this->pickedValues = collect();

        $this->timestamp = time();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.stepper');
    }

    public function toggleFilterValue(int $filterId, string $valueName, int $valueIndex): void
    {
        /** @var Collection $filter */
        $filter = $this->filters->firstWhere('id', '=', $filterId);

        $value = $filter->values->firstWhere('name', '=', $valueName);

        $this->pickedValues->put($filterId, $value?->id);

        $this->timestamp = time();

        $this->init();

        $this->emit('reinit', $filterId, $valueName, $valueIndex);

        $this->dispatchBrowserEvent('test', $this->getEventObject());
    }

    protected function init()
    {
        $this->solutions = Solution::all();

        $this->pickedSolutions = $this->solutions;

        $this->functionalities = collect();
    }

    protected function getEventObject(): array
    {
        return [
            'has_solutions' => $this->hasSolution,
            'picked_solutions' => $this->pickedSolutions,
            'time' => $this->timestamp,
        ];
    }
}
