<?php

namespace App\Livewire\Admin\Inventory\Modals;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;


class Addproduct extends Component
{
    use WithFileUploads;

    public $product_name, $product_description, $product_price, $product_stock, $product_image, $category_id;

    public function store()
    {
        // Validate
        $this->validate([
            'product_name'        => 'required|string|max:255',
            'product_description' => 'nullable|string',
            'product_price'       => 'required|numeric',
            'product_stock'       => 'required|integer',
            'product_image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'category_id'         => 'nullable|exists:categories,id',
        ]);

        $imagePath = null;
        if ($this->product_image) {
            $imagePath = $this->product_image->store('products', 'public');
        }

        // Save to database
        Product::create([
            'product_name'        => $this->product_name,
            'product_description' => $this->product_description,
            'product_price'       => $this->product_price,
            'product_stock'       => $this->product_stock,
            'product_image'       => $imagePath,
            'category_id'         => $this->category_id,
        ]);

        // Reset fields after saving
        $this->reset(['product_name', 'product_description', 'product_price', 'product_stock', 'product_image', 'category_id']);

        session()->flash('message', 'Product added successfully!');

        $this->dispatch('productAdded');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->productId = $id;
        $this->product_name = $product->product_name;
        $this->product_description = $product->product_description;
        $this->product_price = $product->product_price;
        $this->product_stock = $product->product_stock;
        $this->category_id = $product->category_id;
        $this->product_image = $product->product_image;

        $this->dispatchBrowserEvent('open-edit-modal');
    }

    public function update()
    {
        $data = $this->validate();

        if($this->product_image instanceof \Livewire\TemporaryUploadedFile){
            $data['product_image'] = $this->product_image->store('products','public');
        }

        Product::find($this->productId)->update($data);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        session()->flash('message','Product updated successfully!');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('message','Product deleted successfully!');
    }

    private function resetInput()
    {
        $this->reset(['product_name','product_description','product_price','product_stock','product_image','category_id','productId']);
    }

    public function render()
    {
        return view('livewire.admin.inventory.modals.addproduct', [
            'categories' => Category::all()
        ]);
    }

}
