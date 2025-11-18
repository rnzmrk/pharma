<?php

namespace App\Livewire\Pharma\Inventory;

use App\Models\Category;
use App\Models\Product;
use App\Models\StockHistory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    protected $listeners = ['productAdded' => '$refresh'];

    public $product_id;
    public $product_name;
    public $product_description;
    public $product_price;
    public $product_stock;
    public $category_id;
    public $product_image;
    public $showModal = false;

    // Categories section
    public $category_name;
    public $editing_category_id = null;

    // Stocks section
    public $stock_product_id;
    public $stock_change;
    public $stock_reason;
    public $editing_stock_id = null;

    public function editProduct($id)
    {
        $product = Product::find($id);

        if (! $product) {
            return;
        }

        $this->product_id = $product->id;
        $this->product_name = $product->product_name;
        $this->product_description = $product->product_description;
        $this->product_price = $product->product_price;
        $this->product_stock = $product->product_stock;
        $this->category_id = $product->category_id;
        $this->showModal = true;
    }

    public function update()
    {
        $this->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'nullable|string',
            'product_price' => 'required|numeric',
            'product_stock' => 'required|integer|min:0',
            'category_id' => 'nullable|exists:categories,id',
            'product_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if (! $this->product_id) {
            return;
        }

        $product = Product::find($this->product_id);

        if ($product) {
            $data = [
                'product_name' => $this->product_name,
                'product_description' => $this->product_description,
                'product_price' => $this->product_price,
                'product_stock' => $this->product_stock,
                'category_id' => $this->category_id,
            ];

            if ($this->product_image) {
                $data['product_image'] = $this->product_image->store('products', 'public');
            }

            $product->update($data);
        }

        $this->resetEditForm();
        session()->flash('message', 'Product updated successfully!');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            session()->flash('message', 'Product deleted successfully!');
        }
    }

    private function resetEditForm()
    {
        $this->reset([
            'product_id',
            'product_name',
            'product_description',
            'product_price',
            'product_stock',
            'category_id',
            'product_image',
            'showModal',
        ]);
    }

    public function saveCategory()
    {
        $this->validate([
            'category_name' => 'required|string|max:255',
        ]);

        if ($this->editing_category_id) {
            $category = Category::find($this->editing_category_id);
            if ($category) {
                $category->update(['cart_name' => $this->category_name]);
            }
            $message = 'Category updated successfully!';
        } else {
            Category::create(['cart_name' => $this->category_name]);
            $message = 'Category added successfully!';
        }

        $this->editing_category_id = null;
        $this->category_name = '';
        session()->flash('message', $message);
    }

    public function editCategory($id)
    {
        $category = Category::find($id);

        if (! $category) {
            return;
        }

        $this->editing_category_id = $category->id;
        $this->category_name = $category->cart_name;
    }

    public function cancelEditCategory()
    {
        $this->editing_category_id = null;
        $this->category_name = '';
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();
            session()->flash('message', 'Category deleted successfully!');
        }
    }

    public function saveStock()
    {
        $this->validate([
            'stock_product_id' => 'required|exists:products,id',
            'stock_change' => 'required|integer',
        ]);

        if ($this->editing_stock_id) {
            $stock = StockHistory::find($this->editing_stock_id);

            if (! $stock) {
                return;
            }

            $oldProductId = $stock->product_id;
            $oldQuantity = $stock->quantity;

            if ($oldProductId) {
                $oldProduct = Product::find($oldProductId);
                if ($oldProduct) {
                    $oldProduct->product_stock -= $oldQuantity;
                    $oldProduct->save();
                }
            }

            $stock->product_id = $this->stock_product_id;
            $stock->quantity = $this->stock_change;
            $stock->save();

            $newProduct = Product::find($this->stock_product_id);
            if ($newProduct) {
                $newProduct->product_stock += $this->stock_change;
                $newProduct->save();
            }

            $message = 'Stock entry updated successfully!';
        } else {
            $stock = new StockHistory();
            $stock->product_id = $this->stock_product_id;
            $stock->quantity = $this->stock_change;
            $stock->save();

            $product = Product::find($this->stock_product_id);
            if ($product) {
                $product->product_stock += $this->stock_change;
                $product->save();
            }

            $message = 'Stock entry added successfully!';
        }

        $this->stock_product_id = null;
        $this->stock_change = null;
        $this->stock_reason = '';
        $this->editing_stock_id = null;
        session()->flash('message', $message);
    }

    public function deleteStock($id)
    {
        $stock = StockHistory::find($id);

        if ($stock) {
            $stock->delete();
            session()->flash('message', 'Stock history deleted successfully!');
        }
    }

    public function editStock($id)
    {
        $stock = StockHistory::find($id);

        if (! $stock) {
            return;
        }

        $this->editing_stock_id = $stock->id;
        $this->stock_product_id = $stock->product_id;
        $this->stock_change = $stock->quantity;
    }

    public function cancelEditStock()
    {
        $this->editing_stock_id = null;
        $this->stock_product_id = null;
        $this->stock_change = null;
    }

    public function render()
    {
        return view('livewire.pharma.inventory.index', [
            'products' => Product::with('category')->latest()->get(),
            'categories' => Category::latest()->get(),
            'stocks' => StockHistory::with('product')->latest()->get(),
        ]);
    }
}
