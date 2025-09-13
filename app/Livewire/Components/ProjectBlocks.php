<?php

namespace App\Livewire\Components;

use App\Models\Project;
use Livewire\Component;

class ProjectBlocks extends Component
{
    public $projects;
    public $take = 4;
    public $cnt_total;
    public $place = 'Рестораны';

    public function render()
    {
        $this->cnt_total = Project::where('place', $this->place)->count();
        $this->projects = Project::where('place', $this->place)->take($this->take)->get();
        return view('livewire.components.project-blocks');
    }

    public function makePlace($place)
    {
        $this->place = $place;
    }

    public function loadMore()
    {
        $this->take += 4;
    }

}

