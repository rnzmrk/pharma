<?php

namespace App\Livewire\Pharma\Inventory\Modals;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Addproduct extends Component
{
    use WithFileUploads;

    public $product_name;
    public $product_description;
    public $product_price;
    public $product_stock;
    public $product_image;
    public $category_id;

    protected $rules = [
        'product_name' => 'required|string|max:255',
        'product_description' => 'nullable|string',
        'product_price' => 'required|numeric',
        'product_stock' => 'required|integer',
        'product_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'category_id' => 'nullable|exists:categories,id',
    ];

    public function store()
    {
        $data = $this->validate();

        if ($this->product_image) {
            $data['product_image'] = $this->product_image->store('products', 'public');
        } else {
            unset($data['product_image']);
        }

        Product::create($data);

        $this->reset(['product_name', 'product_description', 'product_price', 'product_stock', 'product_image', 'category_id']);

        session()->flash('message', 'Product added successfully!');

        $this->dispatch('productAdded');
    }

    public function render()
    {
        return view('livewire.pharma.inventory.modals.addproduct', [
            'categories' => Category::all(),
        ]);
    }
}
