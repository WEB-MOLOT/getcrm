<?php

namespace App\Http\Livewire;

use App\Models\Dictionaries\License;
use App\Models\Dictionaries\Platform;
use App\Models\Dictionaries\Service as DictionaryService;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Calculator extends Component
{
    public Collection $platforms;

    public Collection $services;

    public Collection $products;

    public Collection $pickProducts;

    public Collection $pickPlatforms;

    public Collection $pickServices;

    public Collection $licenses;

    public bool $hasCalculation = false;

    public string $productQuery = '';

    public string $platformQuery = '';

    public string $serviceQuery = '';

    public function __construct()
    {
        $this->platforms = collect();
        $this->services = collect();
        $this->pickProducts = collect();
        $this->pickPlatforms = collect();
        $this->pickServices = collect();

        parent::__construct();
    }

    public function mount()
    {
        Log::debug('mount');

        $this->reloadForms();
    }

    public function updated($field)
    {
        Log::debug('updated', [
            'field' => $field,
        ]);

        $this->reloadForms();
    }

    public function toggleProduct($id)
    {
        $this->pickProducts->has($id)
            ? $this->pickProducts->forget($id)
            : $this->pickProducts->put($id, $id);

        $this->reloadForms();
    }

    public function togglePlatform($id)
    {
        $this->pickPlatforms->has($id)
            ? $this->pickPlatforms->forget($id)
            : $this->pickPlatforms->put($id, $id);

        $this->reloadForms();
    }

    public function toggleServices($id)
    {
        $this->pickServices->has($id)
            ? $this->pickServices->forget($id)
            : $this->pickServices->put($id, $id);

        $this->reloadForms();
    }

    public function render(): Factory|View|Application
    {
        Log::debug('pickProducts', $this->pickProducts->toArray());
        Log::debug('pickPlatforms', $this->pickPlatforms->toArray());
        Log::debug('pickServices', $this->pickServices->toArray());

        return view('livewire.calculator');
    }

    protected function reloadForms(): void
    {
        Log::debug('reloadForms');

        $this->licenses = License::all();

        $solutionQuery = Solution::query();
        if ($this->productQuery) {
            $solutionQuery->where('title', 'like', '%' . $this->productQuery . '%');
        }
        $solutions = $solutionQuery->get();

        $serviceQuery = Service::query();
        if ($this->productQuery) {
            $serviceQuery->where('title', 'like', '%' . $this->productQuery . '%');
        }
        $services = $serviceQuery->get();

        $this->products = $solutions->merge($services)->map(function (Model $item) {
            return [
                'name' => $item->title,
                'description' => strip_tags($item->description),
                'solution_id' => (int)$item->solution_id,
                'c1' => false,
                'c2' => $this->pickProducts->has((int)$item->solution_id),
            ];
        });

        $this->platforms = Platform::query()->where(function (Builder $query) {
            if ($this->platformQuery) {
                $query->where('name', 'like', '%' . $this->platformQuery . '%');
            }
        })->whereHas('solutions', function (Builder $query) {
            $query->whereIn('id', $this->pickProducts->toArray());
        })->get()->map(function (Platform $item) {
            return [
                'name' => $item->name,
                'description' => strip_tags($item->description),
                'id' => (int)$item->id,
                'c1' => false,
                'c2' => $this->pickPlatforms->has((int)$item->id),
            ];
        });

        $this->services = DictionaryService::query()->where(function (Builder $query) {
            if ($this->serviceQuery) {
                $query->where('name', 'like', '%' . $this->serviceQuery . '%');
            }
        })->whereHas('solutions', function (Builder $query) {
            $query->whereIn('id', $this->pickProducts->toArray());
        })->get()->map(function (DictionaryService $item) {
            return [
                'name' => $item->name,
                'description' => strip_tags($item->description),
                'id' => (int)$item->id,
                'c1' => false,
                'c2' => $this->pickServices->has((int)$item->id),
                'licences' => $item->licences,
            ];
        });

        $this->hasCalculation = $this->pickServices->isNotEmpty();

    }
}
