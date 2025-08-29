<div class="p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold mb-4">Quản lý Project</h2>

    <!-- Form thêm project -->
    <form wire:submit.prevent="{{ $isEditMode ? 'updateProject' : 'addProject' }}">
        <input type="text" wire:model="title" placeholder="Title" class="border p-2 rounded mb-2 w-full">
        <input type="text" wire:model="short_desc" placeholder="Short Description"
            class="border p-2 rounded mb-2 w-full">
        <textarea wire:model="description" placeholder="Description" class="border p-2 rounded mb-2 w-full"></textarea>
        <input type="text" wire:model="thumbnail" placeholder="Thumbnail URL" class="border p-2 rounded mb-2 w-full">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            {{ $isEditMode ? 'Update Project' : 'Add Project' }}
        </button>
        @if ($isEditMode)
            <button type="button" wire:click="$set('isEditMode', false)"
                class="bg-gray-400 text-white px-4 py-2 rounded ml-2 hover:bg-gray-500">Cancel</button>
        @endif
    </form>


    <!-- Danh sách project -->
    <ul class="space-y-2">
        @foreach ($projects as $project)
            <li class="border p-2 rounded flex justify-between items-center">
                <div>
                    <strong>{{ $project->title }}</strong> - {{ $project->short_desc }}
                </div>
                <div class="flex gap-2">
                    <button wire:click="editProject({{ $project->id }})"
                        class="bg-yellow-400 px-2 py-1 rounded hover:bg-yellow-500">Edit</button>
                    <button wire:click="deleteProject({{ $project->id }})"
                        class="bg-red-500 px-2 py-1 rounded hover:bg-red-600 text-white">Delete</button>
                </div>
            </li>
        @endforeach

    </ul>
</div>
