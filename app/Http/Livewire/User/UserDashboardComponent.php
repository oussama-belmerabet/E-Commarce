<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class UserDashboardComponent extends Component
{


    public function render()
    {
        $user = Auth::user();
        $client = $user->client;

        return view('livewire.user.user-dashboard-component', [
            'user' => $user,
            'client' => $client,
        ]);
    }
}
