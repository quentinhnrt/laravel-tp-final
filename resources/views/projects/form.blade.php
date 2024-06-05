<form action="" method="POST" class="mx-[-8px] my-6 flex flex-wrap gap-y-4">
    @csrf

    @if (isset($project))
        @method('PUT')
    @endif

    @php
        $name = isset($project) ? $project->name : old('name');
        $client = isset($project) ? $project->client : old('client');
        $description = isset($project) ? $project->description : old('description');
        $project_manager_id = isset($project) ? $project->project_manager_id : old('project_manager_id');
    @endphp

    <x-molecules.inputs.text
        label="Nom:"
        name="name"
        class="w-full px-2 md:w-1/2"
        :value="$name"
        required="true"
    />
    <x-molecules.inputs.text
        label="Client:"
        name="client"
        class="w-full px-2 md:w-1/2"
        :value="$client"
        required="true"
    />
    <x-molecules.inputs.textarea
        label="description:"
        name="description"
        class="w-full px-2"
        :value="$description"
        required="true"
    />
    <x-molecules.inputs.text
        label="Chef de projet:"
        name="project_manager_id"
        class="w-full px-2"
        :value="$project_manager_id"
        required="true"
    />
    <x-atoms.btn type="submit" class="mx-2 mt-4 w-full">
        @if (isset($project))
            Modifier
        @else
            Créer
        @endif
    </x-atoms.btn>
</form>
