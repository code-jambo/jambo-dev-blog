<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

use App\Models\Post as PostsModel;


use Livewire\WithPagination;

class Posts extends Component
{


    use WithPagination;

    public $searchTerm = '';

    public function render()
    {
        $posts = PostsModel::select('*');
        if ($this->searchTerm != '') {
            $posts->orWhere('title', 'like', "%" . $this->searchTerm . "%");
        }

        return view('livewire.posts', [
            'posts' => $posts->paginate(10)
        ])
            ->extends('layouts.app')
            ->section('content')
        ;
    }
}