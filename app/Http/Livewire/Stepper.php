<?php

namespace App\Http\Livewire;

use App\Models\Dictionaries\Filter;
use App\Models\Solution;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Stepper extends Component
{
    public Collection $filters;

    public Collection $pickedValues;

    public Collection $rawSolutions;

    public bool $hasSolution = false;


    protected Collection $solutions;

    protected Collection $solutionsFilters;

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

        $this->rawSolutions = \App\Models\Dictionaries\Solution::with('filters')->get();
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

        $this->setPickedValue($filterId, $value);

        Log::debug($this->pickedValues->toJson());

        $this->init();

        $this->setSolutionsFilters();

        $this->setPickedSolutions();

        $this->emit('reinit', $filterId, $valueName, $valueIndex);

        $this->dispatchBrowserEvent('test', $this->getEventObject());
    }

    protected function setPickedValue($filterId, $value): void
    {
        $value = $value?->id;

        $value === null
            ? $this->pickedValues->pull((string)$filterId)
            : $this->pickedValues->put((string)$filterId, (string)$value);

        $this->pickedValues = $this->pickedValues->sortKeys();
    }

    protected function getPickedValuesAsString(): string
    {
        return str_replace(' ', '', $this->pickedValues->sortKeys()->toJson());
    }

    protected function init(): void
    {
        $this->solutions = Solution::query()->get();

        $this->pickedSolutions = $this->solutions;

        $this->functionalities = collect();
    }

    protected function setPickedSolutions(): void
    {
        $picked = $this->getPickedValuesAsString();

        $this->pickedSolutions = $this->solutions->filter(function (Solution $solution) use ($picked) {
            foreach ($this->solutionsFilters->get($solution->id) as $line) {
                $lineArr = json_decode($line);
                $pickedArr = json_decode($picked);
                if ($this->arrayContainsArray($pickedArr, $lineArr)) {
                    return true;
                }
            }
            return false;
        })->unique('solution_id');

        $this->hasSolution = $this->pickedSolutions->isNotEmpty();
    }

    protected function arrayContainsArray($pickedArr, $mainArr): bool
    {
        if (!is_object($pickedArr)) {
            return false;
        }

        foreach ($mainArr as $name => $value) {
            if (!property_exists($pickedArr, $name)) {
                return false;
            }
            if ($pickedArr->$name !== $value) {
                return false;
            }
        }

        return true;
    }

    protected function setSolutionsFilters(): void
    {
        $this->solutionsFilters = $this->solutions->keyBy('id')->map(static function (Solution $solution) {
            return $solution->solution->filters->pluck('params_as_string')->toArray();
        });
    }

    protected function getEventObject(): array
    {
        return [
            'has_solutions' => $this->hasSolution,
            'picked_solutions' => $this->pickedSolutions,
            'filters' => $this->solutionsFilters,
            'picked_values' => $this->getPickedValuesAsString(),
        ];
    }
}
