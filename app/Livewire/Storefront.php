<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Storefront extends Component
{
    public function getProductsProperty(): \Illuminate\Database\Eloquent\Collection|array
    {
        return Product::query()->get();
    }

    public function render()
    {
        return view('livewire.storefront');
    }
}
