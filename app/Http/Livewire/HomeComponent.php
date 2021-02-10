<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $teams = Team::all();
        return view('livewire.home-component', ['teams' => $teams])->layout('layouts.master');
    }
}
