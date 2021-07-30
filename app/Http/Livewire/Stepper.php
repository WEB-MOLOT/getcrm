<?php

namespace App\Http\Livewire;

use App\Models\Dictionaries\Filter;
use App\Models\Dictionaries\Solution;
use App\Services\Cart\CartService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class Stepper extends Component
{
    public Collection $filters;

    public Collection $pickedValues;

    public bool $hasSolution = false;

    public Collection $solutions;

    protected Collection $solutionsFilters;

    protected Collection $pickedSolutions;

    protected CartService $cart;

    protected $listeners = [
        'sliderChanged' => 'toggleFilterValue',
        'cartUpdate' => 'updateCart',
    ];

    /**
     * Stepper constructor.
     * @param $id
     */
    #[NoReturn]
    public function __construct($id)
    {
        $this->cart = app(CartService::class);

        parent::__construct($id);
    }


    public function mount()
    {
        $this->filters = Filter::query()->oldest('order')->with('values')->get()->keyBy('id');

        $this->pickedValues = collect();

        $this->solutions = Solution::with('filters')->get();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.stepper');
    }

    public function updateCart(int $id, bool $checked)
    {
        if ($checked) {
            $name = $this->solutions->first(static function (Solution $solution) use ($id) {
                return $solution->id === $id;
            })->name;
            $this->cart->add($id, $name);
        } else {
            $this->cart->removeById($id);
        }

        $this->xxx();
    }

    public function toggleFilterValue(int $filterId, string $valueName, int $valueIndex): void
    {
        /** @var Collection $filter */
        $filter = $this->filters->firstWhere('id', '=', $filterId);

        $value = $filter->values->firstWhere('name', '=', $valueName);

        $this->setPickedValue($filterId, $value);

        $this->xxx($filterId, $valueIndex);
    }

    protected function xxx($filterId = null, $valueIndex = null)
    {
        $this->setSolutionsFilters();

        $this->setPickedSolutions();

        $this->emit('reinit', $filterId, $valueIndex);

        $this->dispatchBrowserEvent('update-solutions', $this->getEventObject());
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
        })->unique('id');

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
            return $solution->filters->pluck('params_as_string')->toArray();
        });
    }

    protected function getEventObject(): array
    {
        return [
            'has_solutions' => $this->hasSolution,
            'picked_solutions' => $this->pickedSolutions,
            'filters' => $this->solutionsFilters,
            'picked_values' => $this->getPickedValuesAsString(),
            'cart' => $this->cart->getItems(),
            'cartKeys' => $this->cart->getItems()->pluck('id')->toArray(),
        ];
    }
}
