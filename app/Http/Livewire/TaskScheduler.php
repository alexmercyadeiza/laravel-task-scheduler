<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskScheduler extends Component
{
    public $task;
    public $when;
    public $approve;
    public $unapprove;

    public function create_task() {
        $this->validate([
            'task' => 'required',
            'when' => 'required',
        ]);

        Task::create([
            'task' => $this->task,
            'when' => $this->when,
        ]);

        $this->reset();
    }

    public function task_complete($task_id) {
        Task::where('id', $task_id)->update([
            'status' => 1,
        ]);
    }

    public function task_incomplete($task_id) {
        Task::where('id', $task_id)->update([
            'status' => 0,
        ]);
    }

    public function delete($task_id) {
        Task::where('id', $task_id)->delete();
    }

    public function render()
    {
        return view('livewire.task-scheduler', [
            'complete_tasks' => Task::where('status', 1)->orderBy('when', 'asc')->get(),
            'incomplete_tasks' => Task::where('status', 0)->orderBy('when', 'asc')->get(),
        ])->layout('layouts.base');
    }
}
