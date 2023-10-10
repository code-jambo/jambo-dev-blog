<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryPost extends Component
{
    use WithPagination;
    public $category;

    public $searchTerm = '';
    public function mount($slug)
    {
        $this->category = Category::where('slug', $slug)->firstOrFail();

    }
    public function render()
    {

        $posts = $this->category->posts();
        if ($this->searchTerm != '') {

            $posts = $posts->where("title", "like", "%" . $this->searchTerm . "%");
        }

        return view('livewire.category-post', ['posts' => $posts->paginate(10)])
            ->extends('layouts.app')
            ->section('content')
        ;
    }

}