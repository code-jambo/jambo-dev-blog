<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Post as PostsModel;


use Livewire\WithPagination;

class Posts extends Component
{


    use WithPagination;



    public function render()
    {
        return view('livewire.posts', ['posts' => PostsModel::simplePaginate(3)])
            ->extends('layouts.app')
            ->section('content')
        ;
    }
}