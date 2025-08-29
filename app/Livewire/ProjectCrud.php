<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectCrud extends Component
{

    public $projects;
    public $title, $short_desc, $description, $thumbnail;

    public function mount()
    {
        $this->projects = Project::all();
    }
    public $selectedProjectId = null; // ID project đang edit
    public $isEditMode = false;       // trạng thái edit

    // Gán dữ liệu khi click Edit
    public function editProject($id)
    {
        $project = Project::findOrFail($id);
        $this->selectedProjectId = $project->id;
        $this->title = $project->title;
        $this->short_desc = $project->short_desc;
        $this->description = $project->description;
        $this->thumbnail = $project->thumbnail;
        $this->isEditMode = true;
    }

    // Cập nhật project
    public function updateProject()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail' => 'nullable|url',
        ]);

        $project = Project::findOrFail($this->selectedProjectId);
        $project->update([
            'title' => $this->title,
            'short_desc' => $this->short_desc,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
        ]);

        $this->projects = Project::all(); // reload danh sách
        $this->resetInput();
        $this->isEditMode = false;
    }
    // Thêm project mới
    public function addProject()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail' => 'nullable|url',
        ]);

        Project::create([
            'title' => $this->title,
            'slug' => \Illuminate\Support\Str::slug($this->title),
            'short_desc' => $this->short_desc,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
        ]);

        $this->projects = Project::all(); // Reload danh sách
        $this->resetInput(); // Xóa input sau khi thêm
    }

    public function deleteProject($id)
    {

        Project::find($id)->delete();

        $this->projects = Project::all(); // Reload danh sách
        $this->resetInput(); // Xóa input sau khi thêm
    }

    // Reset input form
    private function resetInput()
    {
        $this->title = '';
        $this->short_desc = '';
        $this->description = '';
        $this->thumbnail = '';
    }

    public function render()
    {
        return view('livewire.project-crud');
    }
}
