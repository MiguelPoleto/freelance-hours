<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{

    public $projects;

    public function render()
    {
        return view('livewire.projects.index');
    }


    public function mount()
    {

        $this->projects = Project::query()->inRandomOrder()->get();

    }
}
