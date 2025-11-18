<?php

namespace App\Livewire\Customer;

use App\Models\Category;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;

    public $search = '';
    public array $selectedCategories = [];
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatedSelectedCategories(): void
    {
        $this->resetPage();
    }

    public function applyFilters(): void
    {
        $this->resetPage();
    }

    public function addToCart(int $productId)
    {
        $product = ProductModel::find($productId);

        if (! $product) {
            session()->flash('message', 'Product not found.');
            return;
        }

        $user = Auth::user();

        if (! $user) {
            session()->flash('message', 'Please log in to add products to your cart.');
            return redirect()->route('login');
        }

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $cartItem = CartItem::firstOrNew([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
        ]);

        if (! $cartItem->exists) {
            $cartItem->quantity = 0;
        }

        $cartItem->quantity += 1;
        $cartItem->price_each = $product->product_price;
        $cartItem->save();

        session()->flash('message', $product->product_name . ' added to cart.');
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        $categories = Category::orderBy('cart_name')->get();

        $filteredCategoryIds = array_filter($this->selectedCategories, function ($value) {
            return $value !== null && $value !== '';
        });

        $products = ProductModel::with('category')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('product_name', 'like', '%' . $this->search . '%')
                        ->orWhere('product_description', 'like', '%' . $this->search . '%');
                });
            })
            ->when($filteredCategoryIds, function ($query) use ($filteredCategoryIds) {
                $query->whereIn('category_id', $filteredCategoryIds);
            })
            ->latest()
            ->paginate(12);

        return view('livewire.customer.product', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
