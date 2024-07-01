<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Section;

class ProductMenu extends Component
{
    use WithPagination;

    public $sectionId;

    public function mount($sectionId = null)
    {
        $this->sectionId = $sectionId;
    }

    public function render()
    {
        $sections = Section::all();
        $products = $this->sectionId ? Product::where('section_id', $this->sectionId)->paginate(8) : Product::paginate(8);

        return view('livewire.product-menu', [
            'sections' => $sections,
            'products' => $products,
        ]);
    }

    public function filterProducts($sectionId)
    {
        $this->sectionId = $sectionId;
        $this->resetPage();
    }
}
