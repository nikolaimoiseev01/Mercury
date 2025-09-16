<?php

namespace App\Livewire\Pages\Portal;

use App\Models\Project;
use Livewire\Component;

class ProjectPage extends Component
{
    public $project;

    public function render()
    {
        return view('livewire.pages.portal.project-page');
    }

    public function mount($slug)
    {
        $this->project = Project::where('slug', $slug)->first();
    }
}
