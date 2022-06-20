<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $categories;
    public $searchQuery;
    public $searchCategory;

    // posso anche non aggiungerla, è solo per avere un esempio
    protected $queryString = [
        'searchQuery' => ['except' => '']
    ];

    protected $paginationTheme = 'bootstrap'; // default per Livewire: Tailwind

    public function mount()
    {
        $this->categories = Category::all();
        $this->searchQuery = '';
        $this->searchCategory = '';
    }

    public function render()
    {
        sleep(1); // per simulare un caricamento lento

        $products = Product::with('categories')
            ->when($this->searchQuery != '', function($query) {
                $query->where('name', 'like', '%'.$this->searchQuery.'%');
            })
            ->when($this->searchCategory != '', function($query) {
                $query->whereHas('categories', function($query2) {
                    $query2->where('id', $this->searchCategory);
                });
            })
            ->latest()
            ->paginate(10);

        return view('livewire.product.index', [
            'products' => $products
        ]);
    }

    public function deleteProduct($product_id)
    {
        Product::find($product_id)->delete();
    }
}
