<form action="" method="post" class="mx-[-8px] my-6 flex flex-wrap gap-y-4">
    @csrf
    @isset($task)
        @method('PUT')
    @endif

    <x-molecules.inputs.text
        label="Nom:"
        name="name"
        class="w-full px-2 md:w-1/2"
        :value="isset($task) ? $task->name : old('name')"
        required="true"
        placeholder="Nom de la tâche"
    />

    <x-molecules.inputs.select
        label="Projet:"
        name="project_id"
        class="w-full px-2 md:w-1/2"
        required="true"
    >
        <option value="">Choisir un projet</option>
        @foreach ($projects as $project)
            <option
                value="{{ $project->id }}"
                @if (isset($task) && $task->project_id === $project->id) selected @endif
            >
                {{ $project->name }}
            </option>
        @endforeach
    </x-molecules.inputs.select>

    <x-molecules.inputs.textarea
        label="Description:"
        name="description"
        class="w-full px-2"
        :value="isset($task) ? $task->description : old('description')"
        required="true"
        placeholder="Description de la tâche"
    />

    <x-molecules.inputs.select
        label="Chef de projet:"
        name="project_manager_ids[]"
        class="w-full px-2 md:w-1/2"
        multiple="true"
    >
        <option value="">Choisir un/des chef(s) de projet</option>
        @foreach ($projectManagers as $projectManager)
            <option
                value="{{ $projectManager->id }}"
                @if (isset($task) && $task->isAssignedTo($projectManager->id)) selected @endif
            >
                {{ $projectManager->firstname }}
                {{ $projectManager->lastname }}
            </option>
        @endforeach
    </x-molecules.inputs.select>

    <x-molecules.inputs.select
        label="Développeurs:"
        name="developer_ids[]"
        class="w-full px-2 md:w-1/2"
        multiple="true"
    >
        <option value="">Choisir un/des développeur(s)</option>
        @foreach ($developers as $developer)
            <option
                value="{{ $developer->id }}"
                @if (isset($task) && $task->isAssignedTo($developer->id)) selected @endif
            >
                {{ $developer->firstname }}
                {{ $developer->lastname }}
            </option>
        @endforeach
    </x-molecules.inputs.select>

    <x-molecules.inputs.select
        label="Natures de la tâche:"
        name="natures_ids[]"
        class="w-full px-2 md:w-1/2"
        multiple="true"
    >
        <option value="">Choisir la nature</option>
        @foreach ($natureTags as $tag)
            <option
                value="{{ $tag->id }}"
                @if (isset($task) && $task->hasTag($tag->id)) selected @endif
            >
                {{ $tag->label }}
            </option>
        @endforeach
    </x-molecules.inputs.select>

    <x-molecules.inputs.select
        label="Statut:"
        name="status_id"
        class="w-full px-2 md:w-1/2"
    >
        <option value="">Statut</option>
        @foreach ($statusTags as $tag)
            <option
                value="{{ $tag->id }}"
                @if (isset($task) && $task->hasTag($tag->id)) selected @endif
            >
                {{ $tag->label }}
            </option>
        @endforeach
    </x-molecules.inputs.select>

    <x-atoms.btn type="submit" class="mx-2 mt-4 w-full">
        @if (isset($task))
            Modifier
        @else
            Créer
        @endif
    </x-atoms.btn>
</form>
