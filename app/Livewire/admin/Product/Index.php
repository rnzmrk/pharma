<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategories = [];

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

    public function render()
    {
        $categories = Category::orderBy('cart_name')->get();

        $products = Product::with('category')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('product_name', 'like', '%' . $this->search . '%')
                        ->orWhere('product_description', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->selectedCategories, function ($query) {
                $filtered = array_filter($this->selectedCategories, fn ($id) => $id !== null && $id !== '');
                if (! empty($filtered)) {
                    $query->whereIn('category_id', $filtered);
                }
            })
            ->latest()
            ->paginate(12);

        return view('livewire.admin.product.index', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
