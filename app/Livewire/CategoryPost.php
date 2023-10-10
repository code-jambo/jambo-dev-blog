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


    public function mount($slug)
    {
        // $category = Category::where('slug', $slug)->first();
        $this->category = Category::where('slug', $slug)->firstOrFail();
        // if ($category) {

        //     $posts = $category->posts()->paginate(3);
        //     dd($posts);
        // }

    }
    public function render()
    {

        $posts = $this->category->posts()->paginate(3);

        return view('livewire.category-post', ['posts' => $posts])
            ->extends('layouts.app')
            ->section('content')
        ;
    }



}