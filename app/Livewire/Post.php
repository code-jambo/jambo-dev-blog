<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Post as PostModel;

class Post extends Component
{

    public $post;

    public function mount($slug)
    {
        $this->post = PostModel::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.post')
            ->extends('layouts.app')
            ->section('content')
        ;
    }
}