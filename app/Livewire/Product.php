<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{
    public int $productId;

    public function getProductProperty()
    {
        return \App\Models\Product::findOrFail($this->productId);
    }

    public function render()
    {
        return view('livewire.product');
    }
}
