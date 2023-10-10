<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Category;

class Categories extends Component
{
    public function render()
    {
        return view('livewire.categories', ['categories' => Category::all()])
            ->extends('layouts.app')
            ->section('content')
        ;
    }
}