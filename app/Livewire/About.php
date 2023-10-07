<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.about', ['content' => Setting::find(1)->about])
            ->extends('layouts.app')
            ->section('content')
        ;
    }
}