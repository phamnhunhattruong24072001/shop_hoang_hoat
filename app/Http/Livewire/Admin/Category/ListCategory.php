<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class ListCategory extends Component
{
    public $data = [];

    public function render()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('livewire.admin.category.list-category', compact('categories'));
    }
}