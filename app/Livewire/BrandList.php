<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;

class BrandList extends Component
{
    public $brands;
    public function mount($brands)
    {
        $this->brands = $brands;
    }
    public function render()
    {
        return view("livewire.brand-list");
    }
}
