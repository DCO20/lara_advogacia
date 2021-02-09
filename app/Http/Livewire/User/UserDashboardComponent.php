<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user.user-dashboard-component',
        [
            'users' => $users
        ])->layout('layouts.master');
    }
}
