<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{
    public int $productId;
    public mixed $variant;

    public array $rules = [
        'variant' => ['required', 'exists:App\Models\ProductVariant,id']
    ];

    public function mount()
    {
        $this->variant = $this->product->productVariants()->value('id');
    }

    public function addToCart()
    {
        $this->validate();
    }

    public function getProductProperty()
    {
        return \App\Models\Product::findOrFail($this->productId);
    }

    public function render()
    {
        return view('livewire.product');
    }
}
