<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskScheduler extends Component
{
    public function render()
    {
        return view('livewire.task-scheduler')->layout('layouts.base');
    }
}
